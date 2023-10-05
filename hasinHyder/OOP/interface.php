<?php 
interface BaseAnimal{
    public function isAlive();
    public function devAge();
    public function devSkills();
}


class Animal implements BaseAnimal{
    public function isAlive(){}
    public function devAge(){}
    public function devSkills(){}
}

interface HumanPro extends BaseAnimal{
    public function working();
}


$newObj = new Animal();

echo $newObj instanceof HumanPro;