<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name:"k_project")]
#[ORM\Entity(repositoryClass:"App\Repository\ProjectRepository")]
class Project
{
    #[ORM\Column(name:"id", type:"bigint")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy:"AUTO")]
    private ?string $id;

    #[ORM\Column(name:"title", type:"string")]
    private ?string $title;

    #[ORM\Column(name:"description", type:"text")]
    private ?string $description;

    #[ORM\Column(name:"price", type:"string")]
    private ?string $price;

    #[ORM\Column(name:"photo_number", type:"integer")]
    private ?int $photoNumber;

    #[ORM\ManyToOne(targetEntity:"App\Entity\Category", inversedBy:"projects")]
    #[ORM\JoinColumn(name:"category_id", referencedColumnName:"id")]
    private $category;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    public function setCustomer(string $customer): static
    {
        $this->customer = $customer;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): static
    {
        $this->place = $place;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPhotoNumber(): ?int
    {
        return $this->photoNumber;
    }

    public function setPhotoNumber(int $photoNumber): static
    {
        $this->photoNumber = $photoNumber;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;

        return $this;
    }

   

}
