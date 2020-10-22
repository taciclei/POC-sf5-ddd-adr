<?php


namespace App\Application;

use GeneratedHydrator\Configuration;

class HydratorRequest implements HydratorRequestInterface
{
    private string $request;
    private string $class;
    private Configuration $config;
    private object $hydrator;
    private object $hydratorClass;

    /**
     * HydratorRequest constructor.
     * @param string $request
     * @param string $class
     */
    public function __construct(string $request, string $class)
    {
        $this->request = $request;
        $this->class = $class;
        $this->config = new Configuration($class);
        $this->hydratorClass = $this->class->createFactory()->getHydratorClass();
        $this->hydrator = new $this->hydratorClass;

        $this->hydrate($this->__toArray($request), $this->hydratorClass);
    }

    /**
     * @param $request
     * @return array
     */
    public function __toArray($request):array {
        return current(json_decode($request, true));
    }
    /**
     * @param object $object
     * @return array
     */
    public function extract(object $object):array {
        return $this->hydrator->extract($object);
    }

    /**
     * @param array $array
     * @param object $object
     * @return mixed
     */
    public function hydrate(array $array, object $object) {
        return $this->hydrator->hydrate($array, $object);
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request): void
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param Configuration $config
     */
    public function setConfig(Configuration $config): void
    {
        $this->config = $config;
    }

    /**
     * @return mixed
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }

    /**
     * @param mixed $hydrator
     */
    public function setHydrator($hydrator): void
    {
        $this->hydrator = $hydrator;
    }

    /**
     * @return mixed
     */
    public function getHydratorClass()
    {
        return $this->hydratorClass;
    }

    /**
     * @param mixed $hydratorClass
     */
    public function setHydratorClass($hydratorClass): void
    {
        $this->hydratorClass = $hydratorClass;
    }

}