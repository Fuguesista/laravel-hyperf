<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\Context\ApplicationContext;
use Hyperf\Di\Definition\DefinitionSourceFactory;
use SwooleTW\Hyperf\Container\Container;
use SwooleTW\Hyperf\Foundation\ProvidersLoader;

/**
 * Initialize a dependency injection container that implemented PSR-11 and return the container.
 */
$container = ApplicationContext::setContainer(
    new Container((new DefinitionSourceFactory())())
);
(new ProvidersLoader($container))
    ->load();

return $container;