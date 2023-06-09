<?php

abstract class User 
{
    protected $name;

     abstract public function getSettings();
    
 }
 
 class Candidate extends User
 {
     protected $settings=[];
     
     public function __constructs(array $settings)
     {
         $this->settings = $settings;
     }
     
     public function getSettings()
     {
         return $this->settings;
     }
 }
 
 class Employee extends User
 {
     protected $settings=[];
     
     public function __constructs(array $settings)
     {
         $this->settings = $settings;
     }
     
     public function getSettings()
     {
         return $this->settings;
     }
 }
 
 
 class UserSettings
 {
     protected $user;
     
     public function __construct(User $user)
     {
         $this->user = $user;
     }
     
     public function output()
     {
         return $this->user->getSettings();
     }
 }