<?php 
class Question implements IManager{
    private $id;
    private $nbPoint;
    private $question;
    private $reponses=[]:
    private $type;

    public function __construct($rowBd=null){
        //Hydratation de l'objet compte à partir 
        //d'un tuple de la table compte
      if($rowBd!=null){
          $this->hydrate($rowBd);
      }  
    }
    public function hydrate($rowBd){
          $this->id=$rowBd['id'];
          $this->nbPoint=$rowBd['nbPoint'];
          $this->question=$rowBd['question'];
          $this->reponses=$rowBd['reponses'];
          $this->type=$rowBd['type'];
          

    }

  public function getId(){
      return $this->id;
  }
  public function getNbPoint(){
    return $this->NbPoint;
  }
  public function getQuestion(){
    return $this->question;
  }
  public function getReponses(){
    return $this->reponses;
  }
  public function getType(){
    return $this->type;
  }

  
  public function setNbPoint($nbPoint){
    return $this->NbPoint=$NbPoint;
  }
  public function setQuestion($question){
    return $this->question=$question;
  }
  public function setReponses($reponses){
    return $this->reponses=$reponses;
  }
  public function setType($type){
    return $this->type=$type;
  }
  
}
?>