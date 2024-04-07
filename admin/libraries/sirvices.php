<?php
	class libraries_intro extends database{
		protected $_table = "tbl_services";
		public function update_service($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where service_id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where service_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>