<?php


namespace Ecommerce\Message;

use Ecommerce\Response\PostCategoryResponse;
use Ecommerce\Response\PostCategoryResponseInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CategoryMessageHandler implements CategoryMessageHandlerInterface, MessageHandlerInterface
{
    private PostCategoryResponseInterface $postCategoryResponse;

    /**
     * CategoryMessageHandler constructor.
     * @param PostCategoryResponseInterface $postCategoryResponse
     */
    public function __construct(PostCategoryResponseInterface $postCategoryResponse)
    {
        $this->postCategoryResponse = $postCategoryResponse;
    }


    public function __invoke(CategoryMessage $message)
    {
       return $this->postCategoryResponse->render($message);
    }
}