<?php

namespace Ecommerce\Response;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use Ecommerce\Message\CategoryMessage;
use FOS\RestBundle\View\View;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostCategoryResponse implements PostCategoryResponseInterface
{
    private CategoryRepositoryInterface $categoryRepository;
    private EntityManagerInterface $entityManager;

    /**
     * PostCategoryResponse constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, EntityManagerInterface $entityManager)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
    }


    /**
     * @param array $request
     * @return View
     */
    public function render(array $request):View {
        print_r($request);die;

        $category = new Category();
        $category->setName($data['name']);
        $this->entityManager->persist($category);
        $this->entityManager->flush();

        return View::create($category, Response::HTTP_CREATED);
    }
}