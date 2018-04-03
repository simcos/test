<?php
require 'ExerciceOpenclassroom.php';

$exercice = new ExerciceOpenclassroom(new \DateTime());
echo 'Bonjour à tous, voici mon exercice pour le cours OpenClassroom sur Git et Github';
echo $exercice->getResult();


