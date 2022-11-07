<?php

class Carriere {

    // Attributs
    private Joueur $joueur;
    private Equipe $equipe;
    private int $anneeDebut;

    // Constructeur
    public function __construct(Joueur $joueur, Equipe $equipe, int $anneeDebut) 
    {
        $this->joueur = $joueur;
        $this->joueur->addCarriere($this);
        $this->equipe = $equipe;
        $this->equipe->addCarriere($this);
        $this->anneeDebut = $anneeDebut;
    }

    /**
     * Get the value of joueur
     */ 
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set the value of joueur
     *
     * @return  self
     */ 
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get the value of anneeDebut
     */ 
    public function getAnneeDebut()
    {
        return $this->anneeDebut;
    }

    /**
     * Set the value of anneeDebut
     *
     * @return  self
     */ 
    public function setAnneeDebut($anneeDebut)
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }
}