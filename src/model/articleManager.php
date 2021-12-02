<?php

class articleManager extends model{
    public function getArticles(){
        return $this->getAll('article','Article');
    }

}