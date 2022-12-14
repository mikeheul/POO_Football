<?php

class Pays {

    // Attributs
    private string $nomPays;
    private array $equipes;
    private array $joueurs;

    // Constructor
    public function __construct(string $nomPays) {
        $this->nomPays = $nomPays;
        $this->equipes = [];
        $this->joueurs = [];
    }

    /**
     * Get the value of nomPays
     */ 
    public function getNomPays(): string
    {
        return $this->nomPays;
    }

    /**
     * Set the value of nomPays
     *
     * @return  self
     */ 
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get the value of equipes
     */ 
    public function getEquipes(): array
    {
        return $this->equipes;
    }

    /**
     * Set the value of equipes
     *
     * @return  self
     */ 
    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    /**
     * Get the value of joueurs
     */ 
    public function getJoueurs(): array
    {
        return $this->joueurs;
    }

    /**
     * Set the value of joueurs
     *
     * @return  self
     */ 
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    public function addJoueur(Joueur $joueur)
    {
        $this->joueurs[] = $joueur;
    }

    public function addEquipe(Equipe $equipe)
    {
        $this->equipes[] = $equipe;
    }

    public function showJoueurs(): string
    {
        $result = "<div class='heading'><h1>$this</h1></div><ul>";
        foreach ($this->joueurs as $joueur) {
            $result .= "<li>$joueur</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function showEquipes(): string
    {
        $result = "<div class='heading'><h1>$this</h1></div><ul>";
        // trier les équipes par ordre alphabétique
        usort($this->equipes, function($a, $b){
            return (int)($a->getNomEquipe() > $b->getNomEquipe());
        });
        foreach ($this->equipes as $equipe) {
            $result .= "<li>$equipe</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString()
    {
        return $this->nomPays;
    }
}