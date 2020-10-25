<?php

declare(strict_types=1);

namespace Infrastructure\Action\Rest\Category;

use Ecommerce\Category\Response\GetCategoryResponseInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Ecommerce\Entity\Category;

class GetCategoryAction extends AbstractFOSRestController
{
    public GetCategoryResponseInterface $responder;

    /**
     * @param GetCategoryResponseInterface $responder
     */
    public function __construct(GetCategoryResponseInterface $responder)
    {
        $this->responder = $responder;
    }

    /**
     * get category resource
     * @Rest\Get("/category/{categoryId}", requirements = {"categoryId"="\d+"})
     * @OA\Response(
     *     response=200,
     *     description="Returns the category",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Category::class))
     *     )
     * )
     * @OA\Tag(name="category")
     * @param int $categoryId
     * @return View
     */
    public function __invoke(int $categoryId): View
    {
        return $this->responder->render($categoryId);
    }
}
