<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaRepository::class)
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $categoria;

    /**
     * @ORM\OneToMany(targetEntity=Deportiva::class, mappedBy="categoria")
     */
    private $deportivas;

    public function __construct()
    {
        $this->deportivas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(?string $categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * @return Collection|Deportiva[]
     */
    public function getDeportivas(): Collection
    {
        return $this->deportivas;
    }

    public function addDeportiva(Deportiva $deportiva): self
    {
        if (!$this->deportivas->contains($deportiva)) {
            $this->deportivas[] = $deportiva;
            $deportiva->setCategoria($this);
        }

        return $this;
    }

    public function removeDeportiva(Deportiva $deportiva): self
    {
        if ($this->deportivas->removeElement($deportiva)) {
            // set the owning side to null (unless already changed)
            if ($deportiva->getCategoria() === $this) {
                $deportiva->setCategoria(null);
            }
        }

        return $this;
    }
}
