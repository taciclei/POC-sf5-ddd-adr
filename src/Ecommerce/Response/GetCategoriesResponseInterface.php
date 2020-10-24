<?php

namespace Ecommerce\Response;

use FOS\RestBundle\View\View;

interface GetCategoriesResponseInterface
{
    /**
     * @return View
     */
    public function render(): View;
}