<?php

namespace Ecommerce\Category\Response;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\View\View;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
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
     * @param  $categoryDto
     * @return View
     */
    public function render(object $categoryDto):View {

        $category = new Category();
        $category->setName($categoryDto->getName());
        $this->entityManager->persist($category);
        $this->entityManager->flush();

        return View::create($category, Response::HTTP_CREATED);
    }
}