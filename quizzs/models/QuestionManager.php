<?php

class QuestionManager extends Manager{

     function __construct(){
         $this->tableName="Question";
     }

     public function add($objet){
         $sql="insert into question (id,nbPoint,question,reponses,type) values (".$objet->getId().",".$objet->getNbPoint().",".$objet->getQuestion().",".$objet->getReponses().",".$objet->getType().",".$objet->getScore().")";
        
        return  $this->executeUpdate( $sql)!=0;

     }
     public function update($objet){
        

     }
    
     public function findById($id){
         $sql="select score,question,reponses,nbPoint from question where id='$id'";
        return $this-> ExecuteSelect($sql);
     }

    public function findAll(){
        $sql="select score,question,reponses,nbPoint from question";
        return $this-> ExecuteSelect($sql);
    }
    public function delete($id){
        $sql="DELETE FROM question WHERE id='$id' ";
        return  $this->executeUpdate( $sql)!=0;
    }
}