<?php

class Equipe {

    // Attributs
    private string $nomEquipe;
    private Pays $pays;	
    private DateTime $dateCreation;
    private array $carrieres;

    // Constructeur
    public function __construct(string $nomEquipe, Pays $pays, string $dateCreation)
    {
        $this->nomEquipe = $nomEquipe;
        $this->pays = $pays;
        $this->pays->addEquipe($this);
        $this->dateCreation = new DateTime($dateCreation);
        $this->carrieres = [];
    }

    /**
     * Get the value of nomEquipe
     */ 
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * Set the value of nomEquipe
     *
     * @return  self
     */ 
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;
        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Get the value of carrieres
     */ 
    public function getCarrieres()
    {
        return $this->carrieres;
    }

    /**
     * Set the value of carrieres
     *
     * @return  self
     */ 
    public function setCarrieres($carrieres)
    {
        $this->carrieres = $carrieres;
        return $this;
    }

    public function addCarriere(Carriere $carriere)
    {
        $this->carrieres[] = $carriere;
    }

    public function showJoueurs() {
        $result = "<div class='heading'><h1>$this</h1><p>".$this->pays." - ".$this->dateCreation->format("Y")."</p></div><ul>";
        usort($this->carrieres, function($a, $b){
            return $a->getAnneeDebut() < $b->getAnneeDebut();
        });
        foreach($this->carrieres as $c) {
            $result .= "<li>".$c->getJoueur()." (".$c->getAnneeDebut().")</li>";
        }
        $result .= "</ul>";
        return $result;
    }

     /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function __toString()
    {
        return $this->nomEquipe;
    }
}