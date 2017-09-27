<?php

require_once("abstract.php");



class Ebay extends Ecommerce{
	public function __construct(){
		$this->hostURL = 'https://www.ebay.com/sch/i.html?_nkw=abc&_sacat=0';
	}

	public function search($keyword){
		$html = file_get_html('https://www.ebay.com/sch/i.html?_nkw=' . $keyword . '&_sacat=0');
		return $html;
	}
}
