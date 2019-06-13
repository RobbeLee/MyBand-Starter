<?php
    //home and histyory page
    function getStories(){   

        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        $stmt->execute();

        $stories = [];

        while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $stories[] = $result;
        }

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
        $stmt = $conn->prepare("SELECT * FROM `contact`");

        $stmt->execute();
        $Contact = $stmt->fetchAll();
        return $Contact;
    }

    //story page
    function getHistory(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `history`");

        $stmt->execute();
        $history = $stmt->fetchAll();
        return $history;
    }

    //character page
    function getCharacter($id){
        $conn = dbConnect();
	    // Haal het huisje met de opgegeven id op uit de database
        $stmt = $conn->prepare('SELECT * FROM `characters` WHERE id = ?');
        
	    $character = [$id];
	    $stmt->execute($character);
        $character = $stmt->fetch(PDO::FETCH_ASSOC);
        
	    return $character;
    }
?>