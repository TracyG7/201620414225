<?php
    class MyDB
    {
        private $db = null;     //
     
        private function getConn()
        {
            if ($this->db === null)
            {
               
                    //$this->db = new mysqli(SAE_MYSQL_HOST_M,SAE_MYSQL_USER,SAE_MYSQL_PASS, SAE_MYSQL_DB, SAE_MYSQL_PORT)
                                              //or die($this->db->error);   //云平台链接
					$this->db = new mysqli('w.rdc.sae.sina.com.cn','03nxz2wo3m','yzmzmh12mkmkkw3k3zml5113301234whj1jjykk4','app_201620414225','3306')
                                              or die($this->db->error);   //云平台链接
                    $this->db->query("SET NAMES 'utf8'");
                    //echo "<p>SAE_MYSQL_DB</p>";
                }
               
        }
        public function GetData($query) 
        {
            $this->getConn();
            $result = $this->db->query($query) or die ($this->db->error);
            return $result;
        }       
        public function ExecSQL($query) 
        {
            $this->getConn();
            $result = $this->db->query($query) or die ($this->db->error);
            return $result;
        }       
 
         
        public function FreeResult($result)
        {
            $result->free_result();  
        }
        public function __destruct()
        {
            if ($this->db !== null)
            {
                $this->db->close();
                $this->db = null;
            }
        }
         
        public function GetLastInsertId()
        {
            $this->getConn();
            $result = $this->db->insert_id;
            return $result;
        }
         
        public function GetAffectedRows()
        {
            $this->getConn();
            $result = $this->db->affected_rows;
            return $result;
        }
    }
?>