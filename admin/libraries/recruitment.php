<?php
	class libraries_recruitment extends database{
		protected $_table = "tbl_recruitment";
		public function add_rec($data){
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
		public function total_rec(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_rec($start,$limit){
			$sql = "select * from $this->_table order by rec_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_rec($table,$id){
			$sql = "delete from $this->_table where rec_id = '$id'";
			$this->query($sql);
		}
		public function update_rec($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where rec_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where rec_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>