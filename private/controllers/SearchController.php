<?php
    class searchController{
        function search(){
            $searchterm = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
            $searchResults = getSearch($searchterm);
            $template_engine = get_template_engine();
            
            echo $template_engine->render( 'search', [
                'searchResults' => $searchResults,
                'searchterm'     => $searchterm
            ]);
        }
    }
?>