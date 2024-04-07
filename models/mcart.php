<?php
	class Model_mcart extends database{
		protected $_table = "tbl_products";
		public function add_cart($id){
			$sql = "select * from $this->_table where pro_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
		public function total_cart(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_cart(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_cart($id){
			if($_GET['type']){
				if($_GET['type'] == 'one'){
					unset($_SESSION['cart'][$id]);
					
				}else{
					session_destroy();
				}
			}
		}
		public function update_cart(){
			$stt = 0;
			foreach($_POST['cart_num'] as $k){
				if($_POST['cart_qty'][$stt] == 0){
					unset($_SESSION['cart'][$k]);
				}else{
					$_SESSION['cart'][$k]['qty'] = $_POST['cart_qty'][$stt];
				}
				$stt++;
			}
		}
		public function getdata($id){
			$sql = "select * from $this->_table where pro_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>