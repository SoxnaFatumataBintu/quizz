<?php

class CompteManager extends Manager{

     function __construct(){
         $this->tableName="Compte";
     }

     public function add($objet){
         $sql="insert into compte (id,login,password,fullName,profil,avatar,score) values (".$objet->getId().",".$objet->getLogin().",".$objet->getPassword().",".$objet->getFullName().",".$objet->getProfil().",".$objet->getAvatar().",".$objet->getScore().")";
        
        return  $this->executeUpdate( $sql)!=0;

     }
     public function update($objet){
         $sql="UPDATE compte SET fullName=[.$objet->setFullName($fullName).],login=[.$objet->setLogin($login).],password=[.$objet->setPassword($Password).],profil=[.$objet->setProfil($profil).],score=[.$objet->setScore($score).] WHERE id=$id";
         return $this->ExecuteUpdate($sql)!=0;

     }
    
     public function findById($id){
         $sql="select score from compte where id='$id'";
        return $this-> ExecuteSelect($sql);
     }

     public function getUserByLoginPwd($login,$pwd){
         $sql="select * from $this->tableName where login='$login' and password='$pwd'";
         $datas=$this->executeSelect($sql);
         return count($datas)==1? $datas[0]:null;
         /*
          if(ount($datas)==1){
              return $datas[0];
          }else{
              return false;
          }
         */
     }
    public function findAll(){
        $sql="select fullName,score from user";
        $results=$this-> ExecuteSelect($sql);
        $scoreMax=[];
        $max=0;
        foreach($results as $result => $value){
            if($result=="score"){
                for($i=0; $i < 5;$i++){
                    foreach($result as $value){
                        if($value>$max){
                            $max=$value;
                            $scoreMax[]=$result;
                        }
                    }
                }
            }
        }
        return $scoreMax ;
    }
}