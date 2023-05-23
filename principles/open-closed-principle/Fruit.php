<?php 

interface Fruit
{
    public function color(): string;
}

class Apple implements Fruit
{
    public function color(): string
    {
        return "red";
    }
}

class Watermelon implements Fruit 
{
    public function color(): string
    {
        return "green";
    }
}



