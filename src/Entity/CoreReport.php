<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreReport
 *
 * @ORM\Table(name="core_report")
 * @ORM\Entity
 */
class CoreReport
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
     * @ORM\Column(name="agenda_item", type="integer", nullable=false)
     */
    private $agendaItem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_saved", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timeSaved = 'CURRENT_TIMESTAMP';


}
