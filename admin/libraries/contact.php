<?php
	class libraries_contact extends database{
		protected $_table = "tbl_contact_info";
		public function update_contact($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where contact_id = '1'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->fetch();
		}
		public function total_contact(){
			$sql = "select * from tbl_contact";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_contact($start,$limit){
			$sql = "select * from tbl_contact order by con_id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_contact($table,$id){
			$sql = "delete from tbl_contact where con_id = '$id'";
			$this->query($sql);
		}
		public function getcontact($id){
			$sql = "select *from tbl_contact where con_id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>