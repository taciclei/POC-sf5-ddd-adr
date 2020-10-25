<?php

namespace Ecommerce\Category\Dto;

use Application\Traits\HydratorMethods;

class CategoryDto implements CategoryDtoInterface
{
    use HydratorMethods;

    /**
     * @var int|null
     */
    private int $id;
    /**
     * @var string|null
     */
    private string $name;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return CategoryDto
     */
    public function setId(?int $id): CategoryDto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return CategoryDto
     */
    public function setName(?string $name): CategoryDto
    {
        $this->name = $name;
        return $this;
    }
}
