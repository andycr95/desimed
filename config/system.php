<?php

class system{

/* datos de acceso local */
private  $nameDataBase="credito";
private  $ip="localhost";
private  $userDataBase="root";
private  $passwordDataBase="";



// /*datos de acceso produccion - servidor portalx.net*/
// private  $nameDataBase="portalxn_msexpress";
// private  $ip="192.185.128.14";
// private  $userDataBase="portalxn_mexpres";
// private  $passwordDataBase="f11235813";


public function setNameDataBase($nameDataBase){$this->nameDataBase=$nameDataBase;}
public function getNameDataBase(){return $this->nameDataBase;}

public function setIp($ip){$this->ip=$ip;}
public function getIp(){return $this->ip;}

public function setUserDataBase($userDataBase){$this->userDataBase=$userDataBase;}
public function getUserDataBase(){return $this->userDataBase;}

public function setPasswordDataBase($passwordDataBase){$this->passwordDataBase=$passwordDataBase;}
public function getPasswordDataBase(){return $this->passwordDataBase;}
}

?>
