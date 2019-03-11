<?php
    $controller = null;
    $modo = null;

    if(isset($_GET['controller'])){
        //sempre serão enviadas pela view, seja nas acçoes de inserir, apagar, buscar, atualizar
        $controller = strtoupper($_GET['controller']);
        $modo = strtoupper($_GET['modo']);

        switch($controller){
            case 'CONTATOS':
                switch($modo){
                    case "INSERIR" :

                    case "ATUALIZAR" :  

                    case 'EXCLUIR' :

                    case 'BUSCAR'
                }
        }
    }
?>