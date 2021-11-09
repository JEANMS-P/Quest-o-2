<?php 


 $maria = array( 
  "Nome"=>"Maria Clara",
  "CPF"=>"087883456-18",
  "RG"=>"2006089107117",
  "Idade"=> 55,
  "Altura"=> 1.75
);

foreach ($maria as $key => $value) {
  echo $key. ": ".$value."<br>";
}
