<?php

class BmiIndexer
{
    public function calculateBMI($height, $weight)
    {
        $result = ($weight / ($height * $height) * 10000);
        return $result;
    }
}
