<?php

class Book 
{
  public function getTitle()
  {
        return 'Clean Code';
    }
    
    public function getAuthor()
    {
        return 'Uncle Bob';
    }
}


class BookStorage 
{

    public function store($book)
    {
        return 'saving '. $book .'to local database';
    }


}

?>