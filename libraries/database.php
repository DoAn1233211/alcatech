<?php
class database {
    protected $_conn;
    protected $_results;
    
    public function __construct() {
        $this->_conn = new mysqli(config::HOST_NAME, config::HOST_USER, config::HOST_PASS, config::DB_NAME);
        
        // Check kết nối
        if ($this->_conn->connect_error) {
            die("Connection failed: " . $this->_conn->connect_error);
        }
        
        // Set charset
        $this->_conn->set_charset("utf8");
    }
    
    public function query($sql) {
        $this->_results = $this->_conn->query($sql);
    }
    
    public function num_rows() {
        if ($this->_results) {
            $row = $this->_results->num_rows;
        } else {
            $row = 0;
        }
        return $row;
    }
    
    public function fetch() {
        if ($this->_results) {
            $row = $this->_results->fetch_assoc();
        } else {
            $row = 0;
        }
        return $row;
    }
    
    public function fetchAll() {
        $data = array();
        if ($this->_results) {
            while ($row = $this->fetch()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
?>
