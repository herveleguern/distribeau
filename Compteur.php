<?php

class Compteur {

    private $indexAncien;
    private $indexNouveau;

    public function __construct($indexNouveau) {
        $this->indexAncien = 0;
        $this->indexNouveau = $indexNouveau;
    }

    public function nouveauReleve($indexNouveau) {
        $this->indexAncien = $this->indexNouveau;
        $this->indexNouveau = $indexNouveau;
    }

    public function releve() {
        return $this->indexNouveau-$this->indexAncien;
    }

}

?>
