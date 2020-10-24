<?php

namespace Ecommerce\Dto;

interface CategoryDtoInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @param int|null $id
     * @return CategoryDto
     */
    public function setId(?int $id): CategoryDto;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     * @return CategoryDto
     */
    public function setName(?string $name): CategoryDto;
}