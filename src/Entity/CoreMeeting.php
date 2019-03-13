<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreMeeting
 *
 * @ORM\Table(name="core_meeting", uniqueConstraints={@ORM\UniqueConstraint(name="rec_created_by,record_updated_by", columns={"rec_created_by", "rec_updated_by"})}, indexes={@ORM\Index(name="fk_core_meeting_rec_updated_by_core_user_id", columns={"rec_updated_by"}), @ORM\Index(name="IDX_E702540A40743358", columns={"rec_created_by"})})
 * @ORM\Entity
 */
class CoreMeeting
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
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="accepted", type="integer", nullable=false)
     */
    private $accepted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tentative", type="integer", nullable=false)
     */
    private $tentative = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rejected", type="integer", nullable=false)
     */
    private $rejected = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_created_on", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $recCreatedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_updated_on", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $recUpdatedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var \CoreUser
     *
     * @ORM\ManyToOne(targetEntity="CoreUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rec_created_by", referencedColumnName="id")
     * })
     */
    private $recCreatedBy;

    /**
     * @var \CoreUser
     *
     * @ORM\ManyToOne(targetEntity="CoreUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rec_updated_by", referencedColumnName="id")
     * })
     */
    private $recUpdatedBy;

    // Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

}
