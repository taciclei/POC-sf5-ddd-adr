<?php

namespace Infrastructure\Doctrine\Ecommerce\Repository;

interface CategoryRepositoryInterface
{
    public function getLikeQueryBuilder($pattern);
}