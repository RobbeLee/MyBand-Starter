<?php
    //home and histyory page
    function getStories(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        $stmt->execute();
        $stories = $stmt->fetchAll();
        return $stories;
    }

    //agenda page
    function getAgenda(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Calendar`");

        $stmt->execute();
        $Agenda = $stmt->fetchAll();
        return $Agenda;
    }

    //contact page
    function getContact(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Contact`");

        $stmt->execute();
        $Contact = $stmt->fetchAll();
        return $Contact;
    }

    //story page
    function getStoryO(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        $stmt->execute();
        $StoryO = $stmt->fetchAll();
        return $StoryO;
    }

    //character page
    function getCharacter(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM characters WHERE id=? LIMIT 1;");

        $stmt->execute();
        $character = $stmt->fetchAll();
        return $character;
    }
?>