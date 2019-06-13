<?php
    class ContactController{
        function contact() {
        $Contact = getContact();
        $template_engine = get_template_engine();
        echo $template_engine->render( 'contact', ['Contact' => $Contact]);
        }
    }
?>