<?php
class Commune
{
    private $numCom;
    private $nomCom;
    private $lesSecteurs;

    function __construct($numCom, $nomCom)
    {
        $this->numCom = $numCom;
        $this->nomCom = $nomCom;
        $this->lesSecteurs = array();
    }

    public function ajouterUnSecteur($unNumeroSecteur, $unNomSecteur, $unEspaceVert)
    {
        $this->lesSecteurs[] = new Secteur($unNumeroSecteur, $unNomSecteur, $unEspaceVert, $this);
    }

    public function getSecteur($unNumeroSecteur)
    {
        $i = 0;
        $trouve = FALSE;
        while ($i < count($this->lesSecteurs) && !$trouve) {
            if ($this->lesSecteurs[$i]->getNumSecteur() == $unNumeroSecteur) {
                $trouve = TRUE;
            } else {
                $i++;
            }
        }
        if ($trouve) {
            return $this->lesSecteurs[$i]; //objet Secteur
        } else {
            return null;
        }
    }

    public function volumeVannes()
    {
        //todo
    }

    public function volumeUsagers()
    {
        //todo
    }

    public function perte()
    {
        //todo
    }
}
