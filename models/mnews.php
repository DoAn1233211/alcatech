<?php
	class Model_mnews extends database{
		protected $_table = "tbl_news";
		protected $_cate = "tbl_categorie";
		public function get_news($id){
			$sql = "select * from $this->_table where news_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
		public function list_news($start,$limit){
			$sql = "select * from $this->_table order by news_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function total_news(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_cate(){
			$sql = "select * from $this->_cate where cago_status = 1 order by cago_id DESC";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function get_cago($id){
			$sql = "select * from $this->_cate where cago_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
		public function list_cago($start,$limit,$id){
			$sql = "select * from $this->_table where cago_id = '$id' order by news_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function other_cago($start,$limit,$id1,$id2){
			$sql = "select * from $this->_table where cago_id = '$id1' and news_id != '$id2' order by news_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function total_cago($id){
			$sql = "select * from $this->_table where cago_id = $id";
			$this->query($sql);
			return $this->num_rows();
		}
	}