<?php 


interface Login
{
    public function connect();
}

interface Delete
{
    public function delete();
}

class User implements Login
{
    public function connect(){}
}
