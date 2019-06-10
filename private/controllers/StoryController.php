<?php 
    class StoryController{
        function storyOverview(){
            $storyO = getStoryO();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'story', ['storyO' => $storyO]);
        }
        function history(){
            $stories = getStories();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'history', ['stories' => $stories]);
        }
        function character(){
            $character = getCharacter($title);
            $template_engine = get_template_engine();
            echo $template_engine->render( 'character', ['character' => $character]);
        }
    }
?>