<?php
namespace App\Helpers;

class MayoFuncionesHelper
{
    public static function getMenuActivo($ruta)
    {
        $pos = strpos($ruta, '-');
        $ruta2='';
        if ($pos !== false) {
            $ruta2=substr($ruta, 0, $pos);
        }else{
            $ruta2=$ruta;
        }
        if (request()->is($ruta2) || request()->is($ruta2 . '*')) {
            return 'active '. $ruta2;

        } else {
            return '';

        }
    }
    public static function getMenuActivoss($ruta)
    {
        $pos = strpos($ruta, '-');
        $ruta2='';
        if ($pos !== false) {
            $ruta2=substr($ruta, 0, $pos);
        }else{
            $ruta2=$ruta;
        }
        if (strpos(request(), $ruta2) !== false) {
            return 'active '. $ruta2;
        } else {
            return '';

        }
    }

    public static function getItem($ruta)
    {
        $pos = strpos($ruta, '-');
        $ruta2='';
        if ($pos !== false) {
            $ruta2=substr($ruta, 0, $pos);
        }else{
            $ruta2=$ruta;
        }
        return $ruta2;
    }
}
