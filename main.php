<?php
require_once ('Commune.php');
require_once('Secteur.php');
require_once('Branchement.php');
require_once ('Compteur.php');
require_once ('Usager.php');
require_once ('Vanne.php');

$uneCommune = new Commune(1, 'Paris');

$uneCommune->ajouterUnSecteur(11, 'Montsouris', True);
$leSecteur = $uneCommune->getSecteur(11);
$uneVanne = new Vanne(new Compteur(100));
$leSecteur->ajouterUnBranchement($uneVanne);
$uneVanne = new Vanne(new Compteur(100));
$leSecteur->ajouterUnBranchement($uneVanne);

$unUsager = new Usager(new Compteur(90));
$leSecteur->ajouterUnBranchement($unUsager);
$unUsager = new Usager(new Compteur(90));
$leSecteur->ajouterUnBranchement($unUsager);

$uneCommune->ajouterUnSecteur(12, 'Pere Lachaise', True);
$leSecteur = $uneCommune->getSecteur(12);
$uneVanne = new Vanne(new Compteur(100));
$leSecteur->ajouterUnBranchement($uneVanne);
$uneVanne = new Vanne(new Compteur(100));
$leSecteur->ajouterUnBranchement($uneVanne);

$unUsager = new Usager(new Compteur(90));
$leSecteur->ajouterUnBranchement($unUsager);
$unUsager = new Usager(new Compteur(90));
$leSecteur->ajouterUnBranchement($unUsager);

//final : perte d'eau sur le reseau de la commune
//TODO
//echo 'volume distribue: ',$uneCommune->volumeVannes() . "\n";
//echo 'volume consomme: ',$uneCommune->volumeUsagers() . "\n";
//echo 'perte eau: ',$uneCommune->perte(). "\n";

?>
