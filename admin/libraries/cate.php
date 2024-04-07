<?php
	class libraries_cate extends database{
		protected $_table = "tbl_category";
		public function add_cate($data){
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
		public function total_cate(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_cate($start,$limit){
			$sql = "select * from $this->_table order by cate_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_cate($table,$id){
			$sql = "delete from $this->_table where cate_id = '$id'";
			$this->query($sql);
		}
		public function update_cate($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where cate_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where cate_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>