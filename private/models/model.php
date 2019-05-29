<?php
    function getStories(){
        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM `Story`");

        $stmt->execute();
        $stories = $stmt->fetchAll();
        return $stories;
    }
?>