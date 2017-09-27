<?php

require_once("abstract.php");



class Ebay extends Ecommerce{
	public function __construct(){
		$this->hostURL = 'https://www.ebay.com/sch/i.html?_nkw=abc&_sacat=0';
	}

	public function search($keyword = '', $sacat = '0'){
		$html = file_get_html('https://www.ebay.com/sch/i.html?_nkw=' . $keyword . '&_sacat=' . $sacat);
		return $html;
	}
}
