<?php

namespace ShoeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colour
 *
 * @ORM\Table(name="colour")
 * @ORM\Entity(repositoryClass="ShoeBundle\Repository\ColourRepository")
 */
class Colour
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
     * @ORM\Column(name="colour", type="string", length=255)
     */
    private $colour;




    /**
     * @var \ShoeBundle\Entity\Size
     * @ORM\ManyToOne(targetEntity="ShoeBundle\Entity\Size",inversedBy="colour",fetch="EAGER")
     * @ORM\JoinColumn(name="colours", referencedColumnName="id")
     */
    private $colours;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @return Size
     */
    public function getColours()
    {
        return $this->colours;
    }

    /**
     * @param Size $colours
     */
    public function setColours($colours)
    {
        $this->colours = $colours;
    }

    /**
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
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
     * Set colour
     *
     * @param string $colour
     *
     * @return Colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get colour
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }
}

