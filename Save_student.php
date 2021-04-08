<?php
    $name = $_REQUEST["name"];
    $gender = $_REQUEST["gender"];
    $stratum = $_REQUEST["stratum"];

    //1. conect to database

    $host = "localhost";
    $dbname = "university_db_2021_01";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname" , $username, $password);

    //2. Build SQL sentence

    $sql = "INSERT INTO stud ents (id, name, gender, stratum)VALUES(NULL, '$name' , '$gender' , '$stratum')";

    //3. Prepare SQL sentence
    $q = $cnx->prepare($sql);

    //4. Execute Sql Sentence   
    $result = $q->excecute();

    if(result){
        echo "Student saved Sucessfully";
    }
    else{
        echo "There was an error creating the student $name";
    }

?>