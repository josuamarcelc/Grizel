<?php



include('Ebay.php');

$ebay = new Ebay();

$html = $ebay->search('tshirt','20');
// echo '<pre>';
foreach($html->find('#ResultSetItems') as $html2){
	foreach($html2->find('img') as $e){
	echo '<img src="' . $e->src . '"/>';
	}
	foreach($html2->find('#GalleryViewInner') as $e){
	echo '<img src="' . $e->src . '"/>';
	}
}


echo 'asd';
die;



foreach($html->find('img') as $e){
	echo '<img src="' . $e->src . '"/>';
}
    // echo $e->src . '<br>';
// }



// echo '<pre>';print_r($html->find('img'));
die;









// find all image
// foreach($html->find('ul') as $e)
//     echo $e->src . '<br>';

// foreach($html->find('div[id=ResultSetItems]') as $e) 
//     echo $e->href . '<br>';
// die;
// // find all link
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';

// // find all image with full tag
// foreach($html->find('img') as $e)
//     echo $e->outertext . '<br>';

// // find all div tags with id=gbar
// foreach($html->find('div#gbar') as $e)
//     echo $e->innertext . '<br>';

// // find all span tags with class=gb1
// foreach($html->find('span.gb1') as $e)
//     echo $e->outertext . '<br>';

// // find all td tags with attribite align=center
// foreach($html->find('td[align=center]') as $e)
//     echo $e->innertext . '<br>';
    
// // extract text from table
// echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// // extract text from HTML
// echo $html->plaintext;