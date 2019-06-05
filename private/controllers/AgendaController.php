<?php
    class AgendaController{
        function planning(){
            $ATitle = $getATitle();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'agenda', ['Agenda' => $Agenda]);
        }
    }
?>