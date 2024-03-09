<?php

function kelulusan($hasil_akhir)
{
    if($hasil_akhir > 60)
    {
        return 'LULUS';
    } 
    elseif($hasil_akhir < 70)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($hasil_akhir)
{
    if ($hasil_akhir <= 40) {
        return 'E';
    } elseif($hasil_akhir <= 60) {
        return 'D';
    } elseif($hasil_akhir <= 70) {
        return 'C';
    } elseif($hasil_akhir <= 88) {
        return 'B';
    } elseif($hasil_akhir <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}




?>