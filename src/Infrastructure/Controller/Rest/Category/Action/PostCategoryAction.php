<?php

declare(strict_types=1);

namespace Infrastructure\Controller\Rest\Category\Action;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use Ecommerce\Message\CategoryMessage;
use Ecommerce\Response\PostCategoryResponseInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Component\Messenger\MessageBusInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

class PostCategoryAction extends AbstractFOSRestController
{
    public CategoryRepositoryInterface $categoryRepository;
    public EntityManagerInterface $entityManager;
    public PostCategoryResponseInterface $responder;

    /**
     * PostCategoryAction constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param EntityManagerInterface $entityManager
     * @param PostCategoryResponseInterface $responder
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, EntityManagerInterface $entityManager, PostCategoryResponseInterface $responder)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
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
     * @param Category $category
     * @return View
     */
    public function postCategory(MessageBusInterface $bus,Request $request): View
    {
        $bus->dispatch(new CategoryMessage($request));
        //$this->entityManager->persist($category);
        //$this->entityManager->flush();

        //return View::create($category, Response::HTTP_CREATED);
    }
}