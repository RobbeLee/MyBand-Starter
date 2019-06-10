<?php
    //home and histyory page
    function getStories(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        $stmt->execute;      
        $stories = $stmt->fetchAll();
        return $stories;
    }

    //agenda page
    function getAgenda(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Calendar`");

        if (!$stmt->execute()) {
            echo "Helemaal dood";
            exit;
            die;
        }        
        $Agenda = $stmt->fetchAll();
        return $Agenda;
    }

    //contact page
    function getContact(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Contact`");

        if (!$stmt->execute()) {
            echo "Helemaal dood";
            exit;
            die;
        }        
        $Contact = $stmt->fetchAll();
        return $Contact;
    }

    //story page
    function getStoryO(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        if (!$stmt->execute()) {
            echo "Helemaal dood";
            exit;
            die;
        }        
        $StoryO = $stmt->fetchAll();
        return $StoryO;
    }

    //character page
    function getCharacter($title){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM characters WHERE Title=? LIMIT 1;");

        if (!$stmt->execute([$title])) {
            echo "Helemaal dood";
            exit;
            die;
        }
        $character = $stmt->fetchAll();
        return $character;
    }
?>