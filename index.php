<?php

{
class kucing {
	public $suara = "meow";
	public $warna = "putih";
}

$kucing1 = new kucing;
echo "kucingku memiliki suara :". $kucing1->suara .'<br>';
echo "dia berwarna :". $kucing1->warna . '<br>';
echo "<br>";
}



{
class gajah {
	public $badan = "besar";
	public $telinga = "lebar";
}
$gajah2 = new gajah;
echo "Gajah memiliki badan yang :". $gajah2->badan . '<br>';
echo "Gajah juga memiliki telinga yang :". $gajah2->telinga . '<br>';
echo "<br>";
}



{
class ular {
	public $jenis = "reptil";
	public $berjalan = "meleor";
}
$ular3 = new ular;
echo "Ular adalah hewan dari jenis :". $ular3->jenis . '<br>';
echo "Ular berjalan dengan cara :". $ular3->berjalan . '<br>';
echo "<br>";
}

?>