
<?php
//print "ahahhahahahah";
//
//$variabile = 10;
//print $variabile;
//$striga2=$variabile." aaaaaa0";
//
//
//if($variabile === 10.0){
//    echo " vero";
//}elseif(true){
//    echo " vero 2";
//}else{
//    echo " else,";
////}
//for($i=0;$i < 10; $i++){
//    echo " riga".$i. "\n";
//}
$array= [44, 11, 5];
foreach($array as $chiave => $riga){
    echo $chiave." ".$riga."<br />";
}
echo $array[2];

function somma($valore1, $valore2){
    return $valore1+$valore2." " ;

}
 echo somma(10, 20);

class Animale{
    protected $nome = " ";

    /**
     * @return mixed
     */
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * @param mixed $specie
     */
    public function setSpecie($specie)
    {
        $this->specie = $specie;
    }
    public function presentazione(){
        return "io sono ".$this->getNome()." della razza ".$this->getSpecie();

    }
    public $specie;

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}
$cane = new Animale();
$cane->setNome("fido");
$cane->setSpecie("volpino");
echo $cane->presentazione();
//hscfkjdasbhfk
//hjasdgbhjs