<?php
	class Libraries_libhome extends database{
		protected $_table = "tbl_products";
		public function list_slide(){
			$sql = "select * from tbl_slideshow where slide_status = '1'";
			$this->query($sql);
			return $this->fetchAll();
		}
	}
?>