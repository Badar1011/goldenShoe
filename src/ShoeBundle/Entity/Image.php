<?php

namespace ShoeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="ShoeBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * @var \ShoeBundle\Entity\Product
     * @ORM\ManyToOne(targetEntity="ShoeBundle\Entity\Product",inversedBy="image",fetch="EAGER")
     * @ORM\JoinColumn(name="images", referencedColumnName="id")
     */
    private $images;

    /**
     * @return Product
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Product $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }




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
     * Set image
     *
     * @param string $image
     *
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

