<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreAgenda
 *
 * @ORM\Table(name="core_agenda", indexes={@ORM\Index(name="meeting", columns={"meeting"})})
 * @ORM\Entity
 */
class CoreAgenda
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=200, nullable=false)
     */
    private $topic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var \CoreMeeting
     *
     * @ORM\ManyToOne(targetEntity="CoreMeeting")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="meeting", referencedColumnName="id")
     * })
     */
    private $meeting;


    // Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function getTopic() {
        return $this->topic;
    }
}
