<?php

declare(strict_types=1);

namespace Infrastructure\Action\Rest\Category;

use Ecommerce\Category\Dto\CategoryDto;
use Ecommerce\Category\Dto\CategoryDtoInterface;
use Ecommerce\Category\Response\PostCategoryResponseInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;

class PostCategoryAction extends AbstractFOSRestController
{
    public PostCategoryResponseInterface $responder;
    public SerializerInterface $serializer;

    /**
     * PostCategoryAction constructor.
     * @param PostCategoryResponseInterface $responder
     * @param SerializerInterface $serializer
     */
    public function __construct(PostCategoryResponseInterface $responder, SerializerInterface $serializer)
    {
        $this->responder = $responder;
        $this->serializer = $serializer;
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
    public function __invoke(Request $request): View
    {
        $category  = $this->serializer->deserialize($request->getContent(), CategoryDto::class, 'json');
        print_r($category);die;
        return $this->responder->render($categoryDto);
    }
}
