<?php
class user{
    public  $id;
    public  $firstname; 
    public  $lastname; 

    public function __construct( $id,  $firstname,  $lastname){
        $this ->id_user = $id;
        $this ->firstname = $firstname;
        $this ->lastname = $lastname;
    }

}