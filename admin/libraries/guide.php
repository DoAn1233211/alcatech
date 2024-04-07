<?php
	class libraries_guide extends database{
		protected $_table = "tbl_guide";
		public function update_guide($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where guide_id ='$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where guide_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>