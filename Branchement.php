<?php
class Branchement {     

    protected $leCompteur;

    public function __construct($leCompteur) {
        $this->leCompteur = $leCompteur;
    }
    public function typeDeBranchement(){}       

    public function conso() {
        return $this->leCompteur->releve();
    }
}
?>
