  
<?php

use Ecole\eleve;

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$epreuve = new Battle(...[
    new eleve('Benji'),
    new eleve('François'),
    new eleve('Gauthier'),
    new eleve('David'),
    new eleve('jack'),
    new eleve('willy'),
    new eleve('Alexandre'),
    new eleve('Sarah'),
    new eleve('Toufik'),

]
);
