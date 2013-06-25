<?php

// $hosaka = 'If she says that a crow is white, I will finish dyeing the crow in the world white.';
// $google = 'http://www.google.co.jp';
// $yahoo = 'http://www.yahoo.co.jp';

// $instance = new match();

// echo $instance->urlCheck($google).'<br/>';
// echo $instance->urlCheck($yahoo).'<br/>';
// echo $instance->urlCheck($hosaka);


 class match{
	private  $pattern ='/^https?:\/\/[A-Za-z0-9]+(\.[A-Za-z0-9]+)+(\/[A-Za-z0-9]+)*$/';
	private  $result;

	function match($url){
		if(preg_match($this->pattern, $url)){
			$this->result ="$url".'はURLです。';
		}else{
			$this->result ="$url".'はURLではないです。';
		}
	}
	function getResult(){
		return $this->result;
	}
}
?>