<?php


namespace Ecommerce\Message;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class CategoryMessage
{
    protected string $content;

    /**
     * CategoryMessage constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    public function __toArray(): string
    {
        return json_decode($this->content, true);
    }


}