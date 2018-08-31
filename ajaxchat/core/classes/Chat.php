<?php

class Chat extends Core{
	public function fetchMessages(){
		$this->query("
		Select 'chat'.'message',
				'students'.'student_username',
				'students'.'id'
		From 	'chat'
		JOIN	'students' 
		ON		'chat'.'user_id' = 'students'.'id'
		ORDER BY 'chat'.'timestamp'
		DESC
		");
		return $this->rows();		
	}
	public function throwMessage($user_id, $message) {
		
	}
}
