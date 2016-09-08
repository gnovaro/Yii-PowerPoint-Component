<?php

/**
 * Creado con PhpStorm.
 * PowerPoint
 * Autor: Franklyn Alejandro Sosa Pérez <alesjohnson@hotmail.com>
 * Fecha: 8/9/2016
 * Hora: 22:13
 */

namespace AlejandroSosa\YiiPowerPoint\Common;

class Helper
{

    /**
     * Check if array is multidimensional
     * @param $arr
     * @return bool
     */
    public static function is_multi_array( $arr ) {
        rsort( $arr );
        return isset( $arr[0] ) && is_array( $arr[0] );
    }
}