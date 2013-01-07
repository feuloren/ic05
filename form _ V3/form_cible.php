<?php

    mysql_connect("localhost", "username", "") or die("Unable to connect to the databases"); // Connect to MySQL with username "username" et mot de passe ""
    
    mysql_select_db("my_database") or die("Unable to connect to the databases"); // Sélection de la base de donnée
    
    mysql_query("SET NAMES UTF8");  // Indique à MySQL que l'on souhaite retourner les résultats en UTF-8
   
    
    
// TO UPLOAD THE FILES IN THE DATABASE
    if (isset($_FILES['my_files']) AND $_FILES['my_files']['error'] == 0)
    {
        if ($_FILES['my_files']['size'] <= 1000000)
        {
            $infosfichier = pathinfo($_FILES['my_files']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','pdf');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                move_uploaded_file($_FILES['my_files']['tmp_name'], 'uploads/' . basename($_FILES['my_files']['name']));
                echo "The files has been recorded in the database !";
            }
        }
    }
    
    
    
// TO INSERT THE VALUE IN THE DATABASES
//1. Insertion des éléments statiques du formulaire : 
    
    $last_name=$_POST['last_name'];
    $first_name=$_POST['first_name'];
    $email=$_POST['email'];
    $actor_type=$_POST['actor_type'];
    $actor_description=$_POST['actor_description'];
    $project_name=$_POST['project_name'];
    $project_description=$_POST['project_description'];
    $other_actors=$_POST['other_actors'];
    $key_word_init=$_POST['key_word_init'];
    $other_key_word = $_POST['other_key_word'];

    
    // opérations d'insertion sur la base
    $query = "INSERT INTO table_name () VALUES ()"; // !!!!!!!! A COMPLETER !!!!!!!! 
    
    // Exécution de la requête
    $res = mysql_query($query);
    
    
    
// 2. Insertion des éléments dynamique du formulaire (= ceux ajoutés dynamiquement via le code javascript)
    $error = 0;

    if(!empty($_POST)){
        foreach($_POST['sel_key_word'] as $key_word){
            // insertion de chaque mot clef un par un
            $query2 = "INSERT INTO table_names SET keyword='$key_word'";  // !!!!!!!! A COMPLETER !!!!!!!!
            $res2 = mysql_query($query);
            if (!res2){
                $error = 1;
        }
    }
    


// TO DISPLAY A MESSAGE FOR THE USER AFTER THE INSERTION
    if (res && !error){
        echo(<p>Thank you for your collaboration </p>
             <p>To add more actors or projects <a href="form.html">click here</a>.</p>);
    }else{
        echo (<p>Error, please try again ! </p>);
    }
    
    
// Déconnexion de MySQL
    mysql_close();
?>



