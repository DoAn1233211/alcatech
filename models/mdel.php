<?php
class Model_mdel extends database{
	protected $_select="*";
	protected $_where;
	protected $_order;
	protected $_limit;
	public function insert($table,$data){
		$col=implode(",",array_keys($data));
		$arr=array_values($data);
		foreach($arr as $arr2){
			$arr3[]="'$arr2'";
		}
		$val=implode(",",$arr3);
		$sql="insert into $table($col) values($val)";
		$this->query($sql);	
	}
	public function update($table,$data){
		foreach($data as $k=>$v){
			$arr[]="$k='$v'";
		}
		$col=implode(",",$arr);
		$sql="update $table set $col $this->_where";
		$this->query($sql);
	}
	public function delete($table){
		$sql="delete from $table $this->_where";
		$this->query($sql);
	}
	public function select($select=""){
		if($select != ""){
			$this->_select=$select;
		}
	}
	public function where($where){
		if(is_array($where)){
			foreach($where as $k=>$v){
				$arr[]="$k $v";
			}
			$this->_where="where ".implode(" and ",$arr);
		}else{
			$this->_where="where $where";
		}
	}
	
	public function order($col){
		$this->_order="order by $col";
	}
	
	public function limit($start,$num){
		$this->_limit="limit $start,$num";
	}
	
	public function getdata($table){
		$sql="select $this->_select from $table $this->_where $this->_order $this->_limit";
		$this->query($sql);
	}
	public function get($table){
		$sql = "select * from $table";
		$this->query($sql);
		return $this->fetch();
	}
}