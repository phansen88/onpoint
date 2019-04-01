<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreAgendaItem
 *
 * @ORM\Table(name="core_agenda_item", indexes={@ORM\Index(name="agenda", columns={"agenda"})})
 * @ORM\Entity
 */
class CoreAgendaItem
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
     * @ORM\Column(name="short_description", type="string", length=200, nullable=false)
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="rec_created_by", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $recCreatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_created_on", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $recCreatedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="rec_updated_by", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $recUpdatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_updated_on", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $recUpdatedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var \CoreAgenda
     *
     * @ORM\ManyToOne(targetEntity="CoreAgenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agenda", referencedColumnName="id")
     * })
     */
    private $agenda;

    // Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function getShortDescription() {
        return $this->shortDescription;
    }


}
