<?php

/**
 * Description of BaseModel
 *
 */
class BaseModel
{

    /**
     * The PDO instance
     * 
     * @var \PDO
     */
    protected $db;

    /**
     * The database configuration
     * 
     * @var array
     */
    protected $config;

    /**
     * Construct
     * 
     */
    public function __construct($table, $primary_key)
    {
        $this->loadConfig();
        $this->table = $table;
        $this->primary_key = $primary_key;
    }

    /**
     * Load the database configutation
     * 
     */
    protected function loadConfig()
    {
        $xml = new \DOMDocument;
        $xml->load('./config/database.xml');

        $xmlElement = $xml->getElementsByTagName('config');

        $this->config = array(
            'host' => $xmlElement->getAttribute('host'),
            'database' => $xmlElement->getAttribute('database'),
            'user' => $xmlElement->getAttribute('user'),
            'password' => $xmlElement->getAttribute('password'),
            'charset' => $xmlElement->getAttribute('charset')
        );
    }

    /**
     * Initialise PDO Object
     * 
     * @return void
     * @throws Exception PDOException
     */
    public function init()
    {
        try {
            $this->db = new \PDO('mysql:host=' . $this->config['host'] . ';dbname=' . $this->config['database'], $this->config['user'], $this->config['password']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->db->exec('SET NAMES "' . $this->config['charset'] . '"');
        } catch (PDOException $ex) {
            print 'Unable to connect to Database !\nERROR : !' . $ex->getMessage();
        }
    }

    /**
     * Unset PDO Objects
     * 
     * @return void
     */
    public function close()
    {
        $this->db = null;
    }

    public function findAll(array $columns = array(), $offset = null, $limit = null)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . empty($columns) ? '*' : implode(',', $columns) . ' FROM ' . $this->table;
        $query = $this->db->prepare($sql);
        
        return $query->fetchAll();
    }

    public function findById($id, array $columns = array())
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT * FROM `Trip` WHERE `id_trip` = :id';
        $query = $this->db->prepare($sql);

        $query->execute(array(':id' => $id));
        return $query->fetch();
    }

}
