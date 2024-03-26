<?php
class Secteur {

    private $numSecteur;
    private $nomSecteur;
    private $espaceVert;
    private $laCommune;
    private $lesBranchements; //array

    function __construct($numSecteur, $nomSecteur, $espaceVert, $uneCommune) {
        $this->numSecteur = $numSecteur;
        $this->nomSecteur = $nomSecteur;
        $this->espaceVert = $espaceVert;
        $this->laCommune = $uneCommune;
        $this->lesBranchements = array();
    }

    public function getNumSecteur() {
        return $this->numSecteur;
    }

    public function ajouterUnBranchement($branchement) {
        //vanne ou usager selon l'appel...
        $this->lesBranchements[] = $branchement;
    }

    public function volumeVannes() {
        $total = 0;
        foreach ($this->lesBranchements as $unBranchement) {
            if ($unBranchement->typeDeBranchement() == 'Vanne') {
                $total = $total + $unBranchement->conso();
            }
        }
        return $total;
    }

    public function volumeUsagers() {
        $total = 0;
        foreach ($this->lesBranchements as $unBranchement) {
            if ($unBranchement->typeDeBranchement() == 'Usager') {
                $total = $total + $unBranchement->conso();
            }
        }
        return $total;
    }

}

?>
