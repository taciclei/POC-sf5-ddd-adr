<?php


namespace Ecommerce\Message;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CategoryMessageHandler implements CategoryMessageHandlerInterface, MessageHandlerInterface
{
    public function __invoke(CategoryMessage $message)
    {
       print_r($message);
    }
}