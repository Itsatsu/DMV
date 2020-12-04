<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuRepository::class)
 */
class Lieu
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    private $horaires;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     */
    private $transport;

    /**
     * @ORM\Column(type="text")
     */
    private $evenement;

    /**
     * @ORM\Column(type="text")
     */
    private $site_internet;

    /**
     * @ORM\Column(type="text")
     */
    private $lien_maps;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $VilleReferente;

    /**
     * @ORM\Column(type="boolean")
     */
    private $notre_selection;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plus_visite;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->horaires;
    }

    public function setHoraires(?string $horaires): self
    {
        $this->horaires = $horaires;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(?string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getSiteInternet(): ?string
    {
        return $this->site_internet;
    }

    public function setSiteInternet(?string $site_internet): self
    {
        $this->site_internet = $site_internet;

        return $this;
    }

    public function getLienMaps(): ?string
    {
        return $this->lien_maps;
    }

    public function setLienMaps(string $lien_maps): self
    {
        $this->lien_maps = $lien_maps;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVilleReferente(): ?string
    {
        return $this->VilleReferente;
    }

    public function setVilleReferente(string $VilleReferente): self
    {
        $this->VilleReferente = $VilleReferente;

        return $this;
    }

    public function getNotreSelection(): ?bool
    {
        return $this->notre_selection;
    }

    public function setNotreSelection(bool $notre_selection): self
    {
        $this->notre_selection = $notre_selection;

        return $this;
    }

    public function getPlusVisite(): ?bool
    {
        return $this->plus_visite;
    }

    public function setPlusVisite(bool $plus_visite): self
    {
        $this->plus_visite = $plus_visite;

        return $this;
    }
}
