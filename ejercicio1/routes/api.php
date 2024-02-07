<?php
/*directiva PHP modo estricto de tipos, comprobaciones más rigurosas en cuento a
tipo de datos
que utilizan en las funciones y métodos, lo que ayuda a reducir errores con el
tipo de datos
y mejorar la calidad y seguridad del código
*/

declare(strict_types=1);

use Pecee\SimpleRouter\SimpleRouter as Router;
use App\Controllers\Api\ApiController;

//definimos la primera ruta por get en el raiz que muestra hola mundo
Router::get('/', fn () => "Hola mundo");
//definimos por ejemplo nuestra primera entrada en la api
Router::get('/api', fn () => "Esta es la entrada a nuestra API REST");
Router::group(
    ['prefix' => 'api'],
    function (): void {
        Router::get('/', [ApiController::class, '__invoke']);
    }
);