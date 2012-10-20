<?php
abstract class Singleton{

	private static $instance = array();

	private function __construct(){
	}
	
	final public  static function getInstance(){
		$calledClass = get_called_class();
		if(!isset($instance[$calledClass])){
			$instance[$calledClass] = new $calledClass;
		}
		return $instance[$calledClass];
	}
	
	private function __clone(){
	}
}