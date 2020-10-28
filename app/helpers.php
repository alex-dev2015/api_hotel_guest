<?php
/**
 * Created by PhpStorm.
 * User: SMK-TI001
 * Date: 28/10/2020
 * Time: 15:11
 */

function checkWeekend($data){
    $semana = date('D', strtotime(str_replace('-', '/', $data)));

    if ($semana === 'Sat' || $semana === 'Sun'){
        return true;
    }else
        return false;
}