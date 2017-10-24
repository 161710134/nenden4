<?php

class boneka{
	public $bentuk;
	public $warna;
//konstruktor
	public function __construct($bentuk,$warna){
		$this->bentuk=$bentuk;
		$this->warna=$warna;
	}
	public function set_bentuk($bentuk){
	$this->bentuk=$bentuk;
	}

	public function get_bentuk(){
	return $this->bentuk;
	}
	public function set_warna($warna){
	$this->warna=$warna;
}

	public function get_warna(){
	return $this->warna;
}
}
?>