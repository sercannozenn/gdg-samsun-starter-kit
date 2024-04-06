<?php

class It extends Manager
{
    use Logger;
    public function getFirstName(): string
    {
        return ucfirst($this->firstname);
    }
    public function getFullName2(): string
    {
        return $this->getFirstName() . " " . $this->getLastname();
    }
    public function loguCagir(){
        return $this->loglamaYap();
    }

}