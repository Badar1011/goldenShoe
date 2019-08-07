<?php

namespace ShoeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Size
 *
 * @ORM\Table(name="size")
 * @ORM\Entity(repositoryClass="ShoeBundle\Repository\SizeRepository")
 */
class Size
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
     * @var float
     *
     * @ORM\Column(name="size", type="float")
     */
    private $size;


    /**
     * @var \ShoeBundle\Entity\Product
     * @ORM\ManyToOne(targetEntity="ShoeBundle\Entity\Product",inversedBy="size",fetch="EAGER")
     * @ORM\JoinColumn(name="sizes", referencedColumnName="id")
     */
    private $sizes;

    /**
     * @return Product
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @param Product $sizes
     */
    public function setSizes($sizes)
    {
        $this->sizes = $sizes;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }



    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     * @ORM\OneToMany(targetEntity="ShoeBundle\Entity\Colour",mappedBy="colours",cascade="remove",fetch="EAGER")
     */
    private $colour;

    public function __construct()
    {
        $this->colour = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Set size
     *
     * @param float $size
     *
     * @return Size
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

}

