<?php

 class Compte implements IManager {
  //Attributs
       private $id;
       private $login;
       private $password;
       private $profil;
       private $fullName;
       private $avatar;
       private $score=null;
       private $allScore=[];

   //Methodes Concretes d'instances
        //Constructeur
        public function __construct($rowBd=null){
            //Hydratation de l'objet compte à partir 
            //d'un tuple de la table compte
          if($rowBd!=null){
              $this->hydrate($rowBd);
          }  
        }
        public function hydrate($rowBd){
              $this->id=$rowBd['id'];
              $this->login=$rowBd['login'];
              $this->password=$rowBd['password'];
              $this->profil=$rowBd['profil'];
              $this->fullName=$rowBd['fullName'];
              $this->score=$rowBd['score'];
              

        }

      public function getId(){
          return $this->id;
      }
      public function getLogin(){
        return $this->login;
      }
      public function getPassword(){
        return $this->password;
      }
      public function getProfil(){
        return $this->profil;
      }
      public function getFullName(){
        return $this->fullName;
      }
      public function getAvatar(){
        return $this->avatar;
      }
      public function getScore(){
        return $this->score;
      }
      
      public function setLogin($login){
        return $this->login=$login;
      }
      public function setFullName($fullName){
        return $this->fullName=$fullName;
      }
      public function setPassword($Password){
        return $this->password=$Password;
      }
      public function setProfil($profil){
        return $this->profil=$profil;
      }
      public function setScore(){
        $this->score=calculScore();
        $this->Allscore[]=$this->score;
      }
      public function calculScore(){
          return null;

        }
      }

}