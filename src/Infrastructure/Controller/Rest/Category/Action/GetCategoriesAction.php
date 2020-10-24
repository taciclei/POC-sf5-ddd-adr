<?php

declare(strict_types=1);

namespace Infrastructure\Controller\Rest\Category\Action;

use Ecommerce\Dto\CategoryDtoInterface;
use Ecommerce\Entity\Category;
use Ecommerce\Response\GetCategoriesResponseInterface;
use Ecommerce\Response\PostCategoryResponseInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

class GetCategoriesAction extends AbstractFOSRestController
{
    public GetCategoriesResponseInterface $responder;

    /**
     * GetCategoriesAction constructor.
     * @param GetCategoriesResponseInterface $responder
     */
    public function __construct(GetCategoriesResponseInterface $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Creates an category resource
     * @Rest\Get("/categories")
     * @return View
     */
    public function __invoke(): View
    {
        return $this->responder->render();
    }
}
