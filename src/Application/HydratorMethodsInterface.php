<?php

namespace Application;

interface HydratorMethodsInterface
{
    /**
     * @param array $array
     * @param object $object
     * @return object
     */
    public function hydrate(array $array, object $object): object;

    /**
     * @param string $json
     * @param object $object
     * @return object
     * @throws \JsonException
     */
    public function hydrateJson(string $json, object $object): object;

    /**
     * @param object $object
     * @return array
     */
    public function extrat(object $object): array;
}