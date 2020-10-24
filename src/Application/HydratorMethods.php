<?php

namespace Application;

use Laminas\Hydrator\ClassMethodsHydrator;

trait HydratorMethods
{
    /**
     * @var ClassMethodsHydrator
     */
    private ClassMethodsHydrator $hytrador;

    /**
     * HydratorMethods constructor.
     * @param ClassMethodsHydrator $hytrador
     */
    public function __construct(ClassMethodsHydrator $hytrador)
    {
        $this->hytrador = $hytrador;
    }

    /**
     * @param array $array
     * @return object
     */
    public function hydrate(array $array): object
    {
        return $this->hytrador->hydrate($array, $this);
    }

    /**
     * @param string $json
     * @param object $object
     * @return object
     * @throws \JsonException
     */
    public function hydrateJson(string $json): object
    {
        return $this->hydrate(json_decode($json, true, 512, JSON_THROW_ON_ERROR), $this);
    }
    /**
     * @param object $object
     * @return array
     */
    public function extrat(object $object):array
    {

        return $this->hytrador->extract($object);
    }

}