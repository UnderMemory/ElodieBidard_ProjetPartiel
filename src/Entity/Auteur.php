<?php

namespace App\Entity;

use App\Repository\AuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuteurRepository::class)
 */
class Auteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Roman::class, mappedBy="auteur")
     */
    private $romen;

    public function __construct()
    {
        $this->romen = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Roman[]
     */
    public function getRomen(): Collection
    {
        return $this->romen;
    }

    public function addRoman(Roman $roman): self
    {
        if (!$this->romen->contains($roman)) {
            $this->romen[] = $roman;
            $roman->setAuteur($this);
        }

        return $this;
    }

    public function removeRoman(Roman $roman): self
    {
        if ($this->romen->removeElement($roman)) {
            // set the owning side to null (unless already changed)
            if ($roman->getAuteur() === $this) {
                $roman->setAuteur(null);
            }
        }

        return $this;
    }
}
