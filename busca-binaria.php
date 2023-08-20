<?php

function buscaBinaria($lista,$item)
{
    $begin = 0;
    $end = count($lista) - 1;

    while($begin <= $end)
    {
        $mid = floor(($begin + $end) / 2);

        if($lista[$mid] == $item)
        {
            return $item;
        }
        if($lista[$mid] > $item)
        {
            $end = $mid - 1;
        }
        else
        {
            $begin = $mid + 1;
        }
    }

    return null;
}