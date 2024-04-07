<?php
  	class libraries_pagernews{
		protected $_link;
		public function set_link($link,$nid=""){
			if($nid != NULL){
				$this->_link = $link."&nid=".$nid;
			}else{
				$this->_link = $link;
			}
		}
		public function start(){
			if(isset($_GET['start'])){
				$start = $_GET['start'];
			}else{
				$start = 0;
			}
			return $start;
		}
		public function page($total,$limit){
			if(isset($_GET['pages'])){
				$page = $_GET['pages'];
			}else{
				$page = ceil($total/$limit);
			}
			return $page;
		}
		public function listpage($pages,$start,$limit){
			$list = "";
			if($pages > 1){
				$curpage = ($start/$limit) + 1;
				if($curpage != 1){
					$star = $start - $limit;
					$list.= "<a href='tin-tuc/$star/$pages' class='link'>Prev</a>";
				}
				for($i=1;$i<=$pages;$i++){
					if($curpage == $i){
						$list.= "<span class='active'>".$i."</span>";
					}else{
						$star = ($i - 1)*$limit;
						$list.= "<a href='tin-tuc/$star/$pages' class='link'>".$i."</a>";
					}
				}
				if($curpage != $pages){
					$star = $start + $limit;
					$list.= "<a href='tin-tuc/$star/$pages' class='link'>Next</a>";
				}
				return $list;
			}	
		}
	}
?>
