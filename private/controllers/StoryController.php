<?php 
    class StoryController{
        function storyOverview(){
            $history = getHistory();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'story', ['history' => $history]);
        }
        function history(){
            $stories = getStories();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'history', ['stories' => $stories]);
        }
        function character($id){
            $character = getCharacter( $id );
            $template_engine = get_template_engine();
            echo $template_engine->render( 'character', ['character' => $character]);
        }
    }
?>