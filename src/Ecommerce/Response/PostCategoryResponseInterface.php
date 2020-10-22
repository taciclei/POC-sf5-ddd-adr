<?php

namespace Ecommerce\Response;

use Ecommerce\Message\CategoryMessage;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;

interface PostCategoryResponseInterface
{
    /**
     * @param array $request
     * @return View
     */
    public function render(array $request): View;
}