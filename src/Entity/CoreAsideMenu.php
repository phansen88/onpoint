<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreAsideMenu
 *
 * @ORM\Table(name="core_aside_menu")
 * @ORM\Entity
 */
class CoreAsideMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=40, nullable=false)
     */
    private $icon;

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent;

    // Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIcon() {
        return $this->icon;
    }

}
