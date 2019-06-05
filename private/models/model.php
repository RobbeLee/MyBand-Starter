<?php
    //homepage
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
        $ATitle = $stmt->fetchAll();
        return $ATitle;
    }
?>