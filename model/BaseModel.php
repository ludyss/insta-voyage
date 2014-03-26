<?php

/**
 * Description of BaseModel
 *
 */
abstract class BaseModel
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
            'host' => $xmlElement->item(0)->getAttribute('host'),
            'database' => $xmlElement->item(0)->getAttribute('database'),
            'user' => $xmlElement->item(0)->getAttribute('user'),
            'password' => $xmlElement->item(0)->getAttribute('password'),
            'charset' => $xmlElement->item(0)->getAttribute('charset')
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

    /**
     * 
     * @param array $columns
     * @param type $offset
     * @param type $limit
     * @return type
     */
    public function findAll(array $columns = array(), $offset = 0, $limit = null)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . (empty($columns) ? '*' : implode(',', $columns)) . ' FROM ' . $this->table;

        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * 
     * @param type $id
     * @param array $columns
     * @return type
     */
    public function findById($id, array $columns = array())
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'SELECT ' . (empty($columns) ? '*' : implode(',', $columns))
                . ' FROM ' . $this->table
                . ' WHERE ' . $this->primary_key . ' = :id';

        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        return $query->fetch();
    }

    /**
     * 
     * @param array $data
     */
    public function save(array $data)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        if (in_array($this->primary_key, array_keys($data))) {
            $this->update($data);
        } else {
            $this->insert($data);
        }
    }

    /**
     * 
     * @param array $data
     * @return type
     */
    public function update(array $data)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'UPDATE ' . $this->table . ' SET ';

        $columns = array_keys($data);
        foreach ($columns as $column) {
            if ($column != $this->primary_key) {
                $sql .= $column . ' = :' . $column;
                if (end($columns) != $column) {
                    $sql .= ', ';
                }
            }
        }

        $sql .= ' WHERE ' . $this->primary_key . ' = :' . $this->primary_key;
        $query = $this->db->prepare($sql);
        return $query->execute($data);
    }

    /**
     * 
     * @param array $data
     * @return type
     */
    public function insert(array $data)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'INSERT INTO ' . $this->table . ' (' . implode(',', array_keys($data)) . ') VALUES (:' . implode(',:', array_keys($data)) . ')';

        $query = $this->db->prepare($sql);
        $query->execute($data);
        
        return $this->db->lastInsertId();
    }

    /**
     * 
     * @param int $id
     * @return type
     */
    public function deleteById($id)
    {
        if (!$this->db instanceof \PDO) {
            $this->init();
        }

        $sql = 'DELETE FROM ' . $this->table . ' WHERE ' . $this->primary_key . ' = :' . $this->primary_key;

        $query = $this->db->prepare($sql);
        return $query->execute(array(':' . $this->primary_key => $id));
    }

}
