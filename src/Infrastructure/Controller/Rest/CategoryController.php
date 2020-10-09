<?php


namespace Infrastructure\Controller\Rest;

use Doctrine\ORM\EntityManagerInterface;
use Ecommerce\Entity\Category;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Infrastructure\Doctrine\Ecommerce\Repository\CategoryRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

class CategoryController extends AbstractFOSRestController
{
    public CategoryRepositoryInterface $categoryRepository;
    public EntityManagerInterface $entityManager;

    /**
     * CategoryController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository, EntityManagerInterface $entityManager)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
    }

  /**
   * Lists all Category.
   * @Rest\Get("/categories")
   *
   * @return Response
   */
  public function getCategoryction()
  {
      $repository = $this->getDoctrine()->getRepository(Category::class);
      $movies = $repository->findall();
      return $this->handleView($this->view($movies));
  }
}