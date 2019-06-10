<?php
    class AgendaController{
        function planning(){
            $Agenda = getAgenda();
            $template_engine = get_template_engine();
            echo $template_engine->render( 'agenda', ['Agenda' => $Agenda]);
        }
    }
?>