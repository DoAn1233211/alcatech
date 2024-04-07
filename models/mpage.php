<?php
	class Model_mpage extends database{
		protected $_table = "tbl_recruitment";
		public function get_page($id){
			$sql = "select * from $this->_table where rec_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}