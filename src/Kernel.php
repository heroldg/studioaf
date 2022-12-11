<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /* d'après stackoverflow cette function peut reduire mes temps de chargement de page */
//     public function getCacheDir()
// {
//     return $this->rootDir.'/superduper_cache/'.$this->environment;
// }
}
