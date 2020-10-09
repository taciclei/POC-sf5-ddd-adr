<?php

namespace Ecommerce\Response;

use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;

interface PostCategoryResponseInterface
{
    /**
     * @param Request $request
     * @return View
     */
    public function render(Request $request): View;
}