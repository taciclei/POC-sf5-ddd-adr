<?php

declare(strict_types=1);

namespace Infrastructure\Action\Rest\Category;

use Ecommerce\Category\Dto\CategoryDtoInterface;
use Ecommerce\Category\Response\PostCategoryResponseInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

class PostCategoryAction extends AbstractFOSRestController
{
    public PostCategoryResponseInterface $responder;

    /**
     * PostCategoryAction constructor.
     * @param PostCategoryResponseInterface $responder
     */
    public function __construct(PostCategoryResponseInterface $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Creates an category resource
     * @Rest\Post("/category")
     * @OA\RequestBody(
     *     @OA\JsonContent(ref=@Model(type=Category::class))
     * )
     * @OA\Post(
     *     @OA\RequestBody(
     *         request="foo",
     *         description="This is a parameter",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="array", @OA\Items(ref=@Model(type=Category::class)))
     *         )
     *     )
     * )
     * @OA\Tag(name="category")
     * @param CategoryDtoInterface $categoryDto
     * @return View
     */
    public function __invoke(CategoryDtoInterface $categoryDto): View
    {
        return $this->responder->render($categoryDto);
    }
}
