<?php

namespace App\Traits;


trait ExcelLetterPosition
{
    public function createColumnsRange($start = 'A', $end = 'ZZ')
    {
        $return_range = [];
        for ($i = $start; $i !== $end; $i++) {
            $return_range[] = $i;
        }
        return $return_range;
    }

    public function letterPosition($char)
    {
        $abcUpper = $this->createColumnsRange('A', 'ZZ');
        return array_search($char, $abcUpper);
    }
}
