<?php

namespace AppBundle\Service;

class InputDataService
{
    public function process($input = null)
    {
        $results = null;
        if (!$input)
            return null;

        $results = $input;

        // init index 2 and 3 for next step
        foreach ($input as $k => $v)
        {
            if (!isset($results[$k][0]))
                $results[$k][0] = 0;
            if (!isset($results[$k][1]))
                $results[$k][1] = 0;
            $results[$k][2] = 0;
            $results[$k][3] = '';
        }

        foreach ($input as $k => $v)
        {
            if (count($v) == 2)
            {
                $results[$k][2] = $v[0] + $v[1];
                if (($results[$k][2] % 2) == 0)
                    $results[$k][3] = "Paire";
                else
                    $results[$k][3] = "Impaire";
            }
        }
        return $results;
    }
}