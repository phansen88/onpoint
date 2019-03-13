<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreAgendaBacklog
 *
 * @ORM\Table(name="core_agenda_backlog")
 * @ORM\Entity
 */
class CoreAgendaBacklog
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
     * @var int
     *
     * @ORM\Column(name="topic", type="integer", nullable=false)
     */
    private $topic;


}
