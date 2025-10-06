<?php

namespace App\Entity;

use App\Repository\RevendicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RevendicationRepository::class)]
class Revendication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTime $dateCreation = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\ManyToOne(inversedBy: 'revendications')]
    private ?Categorie $categorie = null;

    /**
     * @var Collection<int, Soutient>
     */
    #[ORM\OneToMany(targetEntity: Soutient::class, mappedBy: 'revendication')]
    private Collection $soutients;

    public function __construct()
    {
        $this->soutients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

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

    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTime $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Soutient>
     */
    public function getSoutients(): Collection
    {
        return $this->soutients;
    }

    public function addSoutient(Soutient $soutient): static
    {
        if (!$this->soutients->contains($soutient)) {
            $this->soutients->add($soutient);
            $soutient->setRevendication($this);
        }

        return $this;
    }

    public function removeSoutient(Soutient $soutient): static
    {
        if ($this->soutients->removeElement($soutient)) {
            // set the owning side to null (unless already changed)
            if ($soutient->getRevendication() === $this) {
                $soutient->setRevendication(null);
            }
        }

        return $this;
    }
}
