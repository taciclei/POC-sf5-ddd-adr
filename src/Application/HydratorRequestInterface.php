<?php

namespace App\Application;

use GeneratedHydrator\Configuration;

interface HydratorRequestInterface
{
    /**
     * @param object $object
     * @return array
     */
    public function extract(object $object): array;

    /**
     * @param array $array
     * @param object $object
     * @return mixed
     */
    public function hydrate(array $array, object $object);

    /**
     * @return mixed
     */
    public function getRequest();

    /**
     * @param mixed $request
     */
    public function setRequest($request): void;

    /**
     * @return mixed
     */
    public function getClass();

    /**
     * @param mixed $class
     */
    public function setClass($class): void;

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration;

    /**
     * @param Configuration $config
     */
    public function setConfig(Configuration $config): void;

    /**
     * @return mixed
     */
    public function getHydrator();

    /**
     * @param mixed $hydrator
     */
    public function setHydrator($hydrator): void;

    /**
     * @return mixed
     */
    public function getHydratorClass();

    /**
     * @param mixed $hydratorClass
     */
    public function setHydratorClass($hydratorClass): void;
}