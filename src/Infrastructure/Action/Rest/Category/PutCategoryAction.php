<?php

declare(strict_types=1);

namespace Infrastructure\Action\Rest\Category;

use Ecommerce\Category\Dto\CategoryDtoInterface;
use Ecommerce\Category\Response\GetCategoriesResponseInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Ecommerce\Entity\Category;

class PutCategoryAction extends AbstractFOSRestController
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
     * get category resource
     * @Rest\Put("/category/{categoryId}", requirements = {"categoryId"="\d+"})
     * @OA\RequestBody(
     *     @OA\JsonContent(ref=@Model(type=Category::class))
     * )
     * @OA\Put (
     *     @OA\RequestBody(
     *         request="foo",
     *         description="This is a parameter",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="array", @OA\Items(ref=@Model(type=Category::class)))
     *         )
     *     )
     * )
     * @OA\Response(
     *     response=200,
     *     description="Returns the category",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Category::class))
     *     )
     * )
     * @OA\Parameter(
     *     name="categoryId",
     *     in="query",
     *     description="The field id category",
     *     @OA\Schema(type="int")
     * )
     * @OA\Tag(name="category")
     * @param int $categoryId
     * @param CategoryDtoInterface $categoryDto
     * @return View
     */
    public function __invoke(int $categoryId, CategoryDtoInterface $categoryDto): View
    {
        print_r($categoryDto);die;
        return $this->responder->render($categoryId, $categoryDto);
    }
}
