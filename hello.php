<?php

echo "Hello World!\n";

class movie
{
    private $nom;
    public $datesortie = "12-03-96";
    public $durée = "50";
    public $description = "Lalalalalalal";
    
    public function __construct($nom = "")
    {
        $this->nom = $nom;
    }
    
    public function getName()
    {
        return $this->nom;
    }
    
    public function setName($nom = "")
    {
        $this->nom = $nom;
    }
    
    
    
    function Affiche()
    {
        print 'Le nom du film est : '.$this->nom.' , La date de sortie est : '.$this->datesortie.' , Il dure : '.$this->durée." minute";
        echo "<br>";
        print "\nDescritpion : ".$this->description;
    }
    
}

$film = new movie(LolMdr);
echo $film->Affiche();

?>