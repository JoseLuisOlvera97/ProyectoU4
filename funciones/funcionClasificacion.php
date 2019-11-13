<?php 
 function clasificacion($res){
    if($res==0){
        $resultado = "No selecciono ningun sintoma!";
    }
    else if($res>=1 && $res<4){
        $resultado = "nivel 5, por lo cual NO ES URGENTE, puede esperar hasta 120 minutos";
    }
    else if($res>=4 && $res<16){
        $resultado = "nivel 4, por lo cual es PRIORITARIO, puede esperar hasta 60 minutos";
    }
    else if($res>=16 && $res<64){
        $resultado = "nivel 3, por lo cual es URGENCIA, puede esperar hasta 30 minutos";
    }
    else if($res>=64 && $res<256){
        $resultado = "nivel 2, por lo cual es una EMERGENCIA, puede esperar hasta 15 minutos";
    }
    else if($res>=256){
        $resultado = "nivel 1, por lo cual es REANIMACION, !ATENCION INMEDIATA!";
    } 
    return $resultado;
 }
?>