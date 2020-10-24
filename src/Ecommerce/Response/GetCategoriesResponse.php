<?php

namespace Ecommerce\Response;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\View\View;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class GetCategoriesResponse implements GetCategoriesResponseInterface
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
     * @return View
     */
    public function render():View {


        return View::create($this->categoryRepository->findAll(), Response::HTTP_CREATED);
    }
}