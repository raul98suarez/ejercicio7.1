<?php

namespace App\Twig;

use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Framework\Constraint\Count;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Extensiones extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('dateNormal', array($this, 'dateToString')),
            new TwigFilter('media', array($this, 'mediaNotas')),
        );
    }

    public function dateToString($date): string
    {
        return $date->format('Y-m-d');
    }

    public function mediaNotas($notas): float
    {
        $notasLenght=count($notas);
        $suma=0;
        for($i=0;$i<$notasLenght;$i++){
            $suma +=$notas[$i]->getNota();
        }
        return $suma/$notasLenght;
    }
}
