<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Annonce
 * @Vich\Uploadable
 * @ORM\Table(name="ann_annonce")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="ann_oid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     * @ORM\Column(name="ann_photo", type="string", length=255)
     */
    private $photo;

    /**
     * @Vich\UploadableField(mapping="photo_annonce", fileNameProperty="photo")
     * @Assert\Image(
     *     maxSize = "2000K",
     *     mimeTypes = {"image/jpeg", "image/png"},
     *     mimeTypesMessage = "Le fichier choisi ne correspond pas à un fichier valide",
     *     notFoundMessage = "Le fichier n'a pas été trouvé sur le disque",
     *     uploadErrorMessage = "Erreur dans l'upload du fichier",
     *     maxSizeMessage = "Le fichier est trop volumineux"
     * )
     * @var File
     */
    private $photoFile;
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_nb_piece", type="integer")
     */
    private $nbPiece;

    /**
     * @var float
     *
     * @ORM\Column(name="ann_prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="ann_description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="cli_oid", referencedColumnName="cli_oid")
     */
    private $cliOid;

    /**
     * @ORM\ManyToOne(targetEntity="Admin")
     * @ORM\JoinColumn(name="adm_oid", referencedColumnName="adm_oid")
     */
    private $admOid;

    /**
     * @ORM\ManyToOne(targetEntity="TypeAnnonce")
     * @ORM\JoinColumn(name="typ_oid", referencedColumnName="typ_oid")
     */
    private $typOid;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Annonce
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nbPiece
     *
     * @param string $nbPiece
     *
     * @return Annonce
     */
    public function setNbPiece($nbPiece)
    {
        $this->nbPiece = $nbPiece;

        return $this;
    }

    /**
     * Get nbPiece
     *
     * @return string
     */
    public function getNbPiece()
    {
        return $this->nbPiece;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Annonce
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cliOid
     *
     * @param \AppBundle\Entity\Client $cliOid
     *
     * @return Annonce
     */
    public function setCliOid(\AppBundle\Entity\Client $cliOid = null)
    {
        $this->cliOid = $cliOid;

        return $this;
    }

    /**
     * Get cliOid
     *
     * @return \AppBundle\Entity\Client
     */
    public function getCliOid()
    {
        return $this->cliOid;
    }

    /**
     * Set admOid
     *
     * @param \AppBundle\Entity\Admin $admOid
     *
     * @return Annonce
     */
    public function setAdmOid(\AppBundle\Entity\Admin $admOid = null)
    {
        $this->admOid = $admOid;

        return $this;
    }

    /**
     * Get admOid
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getAdmOid()
    {
        return $this->admOid;
    }

    /**
     * Set typOid
     *
     * @param \AppBundle\Entity\TypeAnnonce $typOid
     *
     * @return Annonce
     */
    public function setTypOid(\AppBundle\Entity\TypeAnnonce $typOid = null)
    {
        $this->typOid = $typOid;

        return $this;
    }

    /**
     * Get typOid
     *
     * @return \AppBundle\Entity\TypeAnnonce
     */
    public function getTypOid()
    {
        return $this->typOid;
    }

    public function __toString()
    {
        return $this->getNom();
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile
     *
     * @return photo
     */
    public function setPhotoFile(File $photo = null)
    {
        $this->photoFile = $photo;

        if ($photo)
            $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }
    /**
     * @return File|null
     */
    public function getPhotoFile()
    {
        return $this->photoFile;
    }
}
