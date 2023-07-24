<?php

namespace Src;

abstract class Pokemon{

    //initialisation des variables
    protected string $name;
    protected int $pv; //valeur de point de vie
    protected int $pa; //valeur max de point d'attaque
    protected int $pd; //valeur max de point de point de défense
    protected int $niveau;
    protected string $image;

    public function __construct($name, $pv, $pa, $pd, $niveau, $image)
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->pa = $pa;
        $this->pd = $pd;
        $this->niveau = $niveau;
        $this->image = $image;

        $this->presentation();
    }

    public function getName():string 
    {
        return $this->name;
    }

    public function getPv():string 
    {
        return $this->pv;
    }
    public function setPv(int $pv){
        $this->pv = $pv;
    }

    public function getPa():string 
    {
        return $this->pa;
    }
    public function setPa(int $pa){
        $this->pa = $pa;
    }

    public function getPd():string 
    {
        return $this->pd;
    }
    public function setPd(int $pd){
        $this->pd = $pd;
    }

    public function getNiveau():string 
    {
        return $this->niveau;
    }
    public function setNiveau(int $niveau){
        $this->niveau = $niveau;
    }

    public function attaque(Pokemon $adversaire):void
    {
        $nbPa = rand(1, $this->pa);
        $adversaire->setPv($adversaire->getPv() - $nbPa);

        echo $this->name . ' a attaquer ' . $adversaire->getName() . ', il lui a infliger ' . $nbPa . ' point(s) de degat.<br />' . $adversaire->getName() . ' a maintenant ' . $adversaire->getPv() . ' point(s) de vie.<br />';

        if($adversaire->getPV() <= 0){
            $adversaire->mort();
        }
    }

    public function soigner():void
    {
        $nbPa = rand(1, $this->pa);
        $this->setPv($this->getPv() + $nbPa);

        echo $this->name . ' s\'est soigner et a repris ' . $nbPa . ' point(s) de vie.<br />';
    }

    private function mort(){
        echo $this->name . ' est mort';
    }

    public function presentation(){
        echo '<table class="table">';
        echo '<tr>';
        echo '<td>';
        echo 'Nom du Pokemon :';
        echo '</td>';
        echo '<td>';
        echo $this->name;
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'Type :';
        echo '</td>';
        echo '<td>';
        echo explode('\\', get_class($this))[2];
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'Point de vie :';
        echo '</td>';
        echo '<td>';
        echo $this->pv;
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'Point de d\'attaque :';
        echo '</td>';
        echo '<td>';
        echo $this->pa;
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'Point de défense :';
        echo '</td>';
        echo '<td>';
        echo $this->pd;
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo 'Generation :';
        echo '</td>';
        echo '<td>';
        echo $this->niveau;
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td colspan="2">';
        echo '<img src="'.$this->image.'" />';
        echo '</td>';
        echo '</tr>';
        echo '</table>';
    }

    

}