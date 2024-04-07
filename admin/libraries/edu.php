<?php
	class libraries_edu extends database{
		protected $_table = "tbl_education";
		public function update_edu($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where edu_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where edu_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>