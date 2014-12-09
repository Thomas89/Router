<?php
try {
    $router = new Core\Router();

    $router->add('controller-only',
        array(
            'method' => 'GET, TEST',
            'route' => '/controller'
        )
    );

    $result = $router->match('GET', '/news');
} catch (Core\RouterException $e) {
    if ($e->getCode() === 1) {
        $result = $e->getMessage();
    }
}

// output: 'Method TEST is not supported'
?>