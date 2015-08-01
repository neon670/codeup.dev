<?php

require 'user_model.php';


$noe = new User;
$noe->first_name = 'J';
$noe->last_name = 'K';
$noe->email = 'j@k.com';
$noe->dob = '1980-01-02';
$noe->save();