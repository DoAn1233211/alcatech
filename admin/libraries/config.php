<?php
	class libraries_config extends database{
		protected $_table = "tbl_config";
		public function update_config($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where config_id = '1'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>