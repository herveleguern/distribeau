<?php

class Usager extends Branchement {

    public function __construct($leCompteur) {
        $this->leCompteur = $leCompteur;
    }

    public function typeDeBranchement() {
        return 'Usager';
    }

}

?>
