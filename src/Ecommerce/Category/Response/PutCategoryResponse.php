<?php

namespace Ecommerce\Category\Response;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\View\View;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class PutCategoryResponse implements PutCategoryResponseInterface
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
     * @param int $categoryId
     * @return View
     */
    public function render(int $categoryId):View
    {
        /* @var $category Category */
        $category = $this->categoryRepository->findById($categoryId);

        if($category) {

        }

        return View::create($category, Response::HTTP_OK);
    }
}