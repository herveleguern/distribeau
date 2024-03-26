<?php

require_once ('Branchement.php');

class Vanne extends Branchement {
//est un Branchement
//utilise le constructeur du parent
//utilise la methode conso() du parent
    
    public function typeDeBranchement() {
        return 'Vanne';
    }
}

?>
