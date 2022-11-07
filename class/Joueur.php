<?php

class Joueur {

    // Attributs
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Pays $pays;
    private array $carrieres;

    // Constructeur
    public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $pays) 
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->pays = $pays;
        $this->pays->addJoueur($this);
        $this->carrieres = [];
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getAge()
    {
        return date_create("now")->diff($this->dateNaissance)->format('%Y ans');
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
     * Get the value of equipes
     */ 
    public function getCarrieres()
    {
        return $this->carrieres;
    }

    /**
     * Set the value of equipes
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

    public function showCarriere()
    {
        $result = "<div class='heading'><h1>$this</h1><p>".$this->pays." - ".$this->getAge()."</p></div><ul>";
        foreach($this->carrieres as $c) {
            $result .= "<li>".$c->getEquipe()." (".$c->getAnneeDebut().")</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }
}