<?php

namespace Ecommerce\Response;

use Ecommerce\Message\CategoryMessage;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;

interface PostCategoryResponseInterface
{
    /**
     * @param CategoryMessage $message
     * @return View
     */
    public function render(CategoryMessage $message): View;
}