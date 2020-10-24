<?php

namespace Ecommerce\Response;

use Ecommerce\Dto\CategoryDto;
use Ecommerce\Dto\CategoryDtoInterface;
use FOS\RestBundle\View\View;

interface PostCategoryResponseInterface
{
    /**
     * @param CategoryDtoInterface $categoryDto
     * @return View
     */
    public function render(CategoryDto $categoryDto): View;
}