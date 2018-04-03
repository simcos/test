<?php

/**
 * Description of ExerciceOpenclassroom
 *
 * @author simon
 */
class ExerciceOpenclassroom {
    
    private $date;
    
    private $reussi;
    
    public function __construct($date, $reussi = true)
    {
        $this->date = new \DateTime();
        $this->reussi = $reussi;
    }
    
    public function getResult()
    {
        if($this->reussi == true){
            return 'exercice parfaitement réeussi!';
        }
        else{
            return false;
        }
    }
    
    public function remercieCorrecteur(){
        return 'Merci à toi gentil correcteur pour ta bonne note';
    }
}
