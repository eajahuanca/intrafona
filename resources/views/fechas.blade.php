<?php
    function fechaCumpleano($fecha){
        $arrayFecha = explode('-', $fecha);
        return $arrayFecha[2].'/'.mesString($arrayFecha[1]).'/'.$arrayFecha[0];
    }

    function mesString($mes){
        $arrayMes = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        return $arrayMes[(int)$mes - 1];
    }
?>