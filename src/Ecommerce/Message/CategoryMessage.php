<?php


namespace Ecommerce\Message;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class CategoryMessage
{
    protected string $content;

    /**
     * CategoryMessage constructor.
     * @param Request $content
     */
    public function __construct(Request $content)
    {
        $this->content = $content;
    }

    /**
     * @return Request
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {

        echo ($this->getContent()->getContent());die;
        return json_decode($this->getContent(), true);
    }


}