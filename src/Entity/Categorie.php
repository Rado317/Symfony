<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    /**
     * @var Collection<int, Revendication>
     */
    #[ORM\OneToMany(targetEntity: Revendication::class, mappedBy: 'categorie')]
    private Collection $revendications;

    public function __construct()
    {
        $this->revendications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

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

    /**
     * @return Collection<int, Revendication>
     */
    public function getRevendications(): Collection
    {
        return $this->revendications;
    }

    public function addRevendication(Revendication $revendication): static
    {
        if (!$this->revendications->contains($revendication)) {
            $this->revendications->add($revendication);
            $revendication->setCategorie($this);
        }

        return $this;
    }

    public function removeRevendication(Revendication $revendication): static
    {
        if ($this->revendications->removeElement($revendication)) {
            // set the owning side to null (unless already changed)
            if ($revendication->getCategorie() === $this) {
                $revendication->setCategorie(null);
            }
        }

        return $this;
    }
}
