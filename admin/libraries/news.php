<?php
	class libraries_news extends database{
		protected $_table = "tbl_news";
		protected $_cate = "tbl_categorie";
		public function add_news($data){
			$table = $this->_table;
			$col = implode(",",array_keys($data));
			$arr = array_values($data);
			foreach($arr as $arr2){
				$arr3[] = "'$arr2'";
			}
			$val = implode(",",$arr3);
			$sql = "insert into $table($col) values($val)";
			$this->query($sql);
		}
		public function total_news(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_news($start,$limit){
			$sql = "select * from $this->_table inner join tbl_categorie on tbl_categorie.cago_id = tbl_news.cago_id order by news_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_news($table,$id){
			$sql = "delete from $this->_table where news_id = '$id'";
			$this->query($sql);
		}
		public function update_news($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where news_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where news_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
		
		//list cate
		public function list_cate(){
			$sql = "select * from $this->_cate";
			$this->query($sql);
			return $this->fetchAll();
		}
	}
?>