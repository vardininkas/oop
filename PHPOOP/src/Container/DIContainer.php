<?php

namespace PHPOOP\Container;
use PHPOOP\Controlers\HomePageControler;
use PHPOOP\Controlers\InputControler;
use PHPOOP\Framework\Router;
use PHPOOP\Data\Input;
use PHPOOP\Repository\InputRepository;
use RuntimeException;

class DIContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found');
        }
        $entry = $this->entries[$id];
        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {
        $this->set(
            InputControler::class,
            function (DIContainer $container) {
                return new InputControler(
                    $container->get(InputRepository::class)
                );
            }
        );

        $this->set(
            Router::class,
            function (DIContainer $container) {
                return new Router(
                $container->get(HomePageControler::class),
                $container->get(InputControler::class)
                );
            }
        );

        $this->set(
            Input::class,
            function (DIContainer $container) {
                return new Input();
            }
        );

        $this->set(
            InputRepository::class,
            function (DIContainer $container) {
                return new InputRepository();

            }
        );

        $this->set(
            HomePageControler::class,
            function (DIContainer $container) {
                return new HomePageControler();
            }
        );
    }
}