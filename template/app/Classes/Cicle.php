<?php
namespace App\Cicle;
class Cicle {
    private $id;
    private $sigles;
    private $nom;
    private $actiu;

    public function __construct($id, $sigles, $nom, $actiu) {
      $this->id = $id;
      $this->sigles = $sigles;
      $this->nom = $nom;
      $this->actiu = $actiu;
  }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of sigles
     */ 
    public function getSigles()
    {
        return $this->sigles;
    }

    /**
     * Set the value of sigles
     *
     * @return  self
     */ 
    public function setSigles($sigles)
    {
        $this->sigles = $sigles;

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
     * Get the value of actiu
     */ 
    public function getActiu()
    {
        return $this->actiu;
    }

    /**
     * Set the value of actiu
     *
     * @return  self
     */ 
    public function setActiu($actiu)
    {
        $this->actiu = $actiu;

        return $this;
    }
  }
?>