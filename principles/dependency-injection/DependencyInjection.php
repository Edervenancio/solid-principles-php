<?php



interface DatabaseInterface
{
    public function connect();
}


class User
{
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    
}