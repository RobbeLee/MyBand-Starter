<?php
    class HomeController{
        function homepage(){
            $stories = getStories();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'home' , ['stories' => $stories]);
        }
    }
?>

