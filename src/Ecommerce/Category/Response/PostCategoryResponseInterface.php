<?php

namespace Ecommerce\Category\Response;

use Ecommerce\Category\Dto\CategoryDto;
use Ecommerce\Category\Dto\CategoryDtoInterface;
use FOS\RestBundle\View\View;

interface PostCategoryResponseInterface
{
    /**
     * @param CategoryDtoInterface $categoryDto
     * @return View
     */
    public function render(CategoryDto $categoryDto): View;
}