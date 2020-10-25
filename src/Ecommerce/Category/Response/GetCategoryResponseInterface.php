<?php

namespace Ecommerce\Category\Response;

use FOS\RestBundle\View\View;

interface GetCategoryResponseInterface
{
    /**
     * @param int $categoryId
     * @return View
     */
    public function render(int $categoryId): View;
}