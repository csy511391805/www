<?php
Class NewsControl extends Control{
	//模型对象
	private $db;
	public function __init(){
		 $this->db = K('news');

	}
	//显示文章内容
	function content(){
		$id=Q('get.id',NULL,'intval');
		if($id){
			$field=$this->db->find($id);
			
			 $this->field =$field;
			 $this->display();
		}
	}
}