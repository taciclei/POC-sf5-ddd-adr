<?php

declare(strict_types=1);

namespace Infrastructure\Action\Rest\Category;

use Ecommerce\Category\Response\GetCategoriesResponseInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Ecommerce\Entity\Category;

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
     * @OA\Response(
     *     response=200,
     *     description="Returns the category",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Category::class))
     *     )
     * )
     * @OA\Tag(name="category")
     * @return View
     */
    public function __invoke(): View
    {
        return $this->responder->render();
    }
}
