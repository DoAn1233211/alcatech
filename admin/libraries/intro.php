<?php
	class libraries_intro extends database{
		protected $_table = "tbl_intro_one";
		public function update_intro($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where intro_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where intro_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>