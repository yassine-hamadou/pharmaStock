<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $dateFourni;

    #[ORM\Column(type: 'date')]
    private $dateFabrication;

    #[ORM\Column(type: 'date')]
    private $datePeremption;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'float')]
    private $prixAchat;

    #[ORM\Column(type: 'float')]
    private $prixVente;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'stocks')]
    #[ORM\JoinColumn(nullable: false)]
    private $idProduit;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $idFournisseur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateFourni(): ?\DateTimeInterface
    {
        return $this->dateFourni;
    }

    public function setDateFourni(\DateTimeInterface $dateFourni): self
    {
        $this->dateFourni = $dateFourni;

        return $this;
    }

    public function getDateFabrication(): ?\DateTimeInterface
    {
        return $this->dateFabrication;
    }

    public function setDateFabrication(\DateTimeInterface $dateFabrication): self
    {
        $this->dateFabrication = $dateFabrication;

        return $this;
    }

    public function getDatePeremption(): ?\DateTimeInterface
    {
        return $this->datePeremption;
    }

    public function setDatePeremption(\DateTimeInterface $datePeremption): self
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixAchat(): ?float
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(float $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getPrixVente(): ?float
    {
        return $this->prixVente;
    }

    public function setPrixVente(float $prixVente): self
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    public function getIdProduit(): ?Product
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Product $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getIdFournisseur(): ?Fournisseur
    {
        return $this->idFournisseur;
    }

    public function setIdFournisseur(?Fournisseur $idFournisseur): self
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }
}
