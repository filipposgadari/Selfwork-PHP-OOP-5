<?php

abstract class Categoria{
    
    abstract public function getMyCategory();
}

class Attualita extends Categoria{
    public function getMyCategory(){
        echo "Categoria Attualità \n";
    }
}

class Sport extends Categoria{
    public function getMyCategory(){
        echo "Categoria Sport \n";
    }
}

class Gossip extends Categoria{
    public function getMyCategory(){
        echo "Categoria Gossip \n";
        
    }
}

class Storia extends Categoria{
    public function getMyCategory(){
        echo "Categoria Storia \n";
    }
}

$categoria1 = new Attualita();
$categoria2 = new Sport();
$categoria3 = new Gossip();
$categoria4 = new Storia();

$categoria1->getMyCategory();
$categoria2->getMyCategory();
$categoria3->getMyCategory();
$categoria4->getMyCategory();