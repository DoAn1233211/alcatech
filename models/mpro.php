<?php 
	class Model_mpro extends database{
		protected $_table = "tbl_products";
		public function get_pro($id){
			$sql = "select * from $this->_table where pro_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
		public function list_pro_new(){
			$sql = "select * from $this->_table where pro_new = 1 limit 0,8";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function list_pro_hot(){
			$sql = "select * from $this->_table where pro_hot = 1 limit 0,8";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function list_pro_saleoff(){
			$sql = "select * from $this->_table where pro_saleoff = 1 limit 0,8";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function list_pro_bestsale(){
			$sql = "select * from $this->_table where pro_bestsale = 1 limit 0,8";
			$this->query($sql);
			return $this->fetchAll();
		}
	}
	