<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUser
 *
 * @ORM\Table(name="core_user", indexes={@ORM\Index(name="rec_created_by", columns={"rec_created_by"}), @ORM\Index(name="rec_updated_by", columns={"rec_updated_by"}), @ORM\Index(name="manager", columns={"manager"})})
 * @ORM\Entity
 */
class CoreUser
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="employee_number", type="string", length=40, nullable=false)
     */
    private $employeeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=200, nullable=false)
     */
    private $firstname;

    /**
     * @var bool
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=2000, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=40, nullable=false)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="blob", length=0, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="rec_class", type="string", length=200, nullable=false, options={"default"="core_user"})
     */
    private $recClass = 'core_user';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_created_on", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $recCreatedOn = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rec_updated_on", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $recUpdatedOn = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=200, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=200, nullable=false)
     */
    private $username;

    /**
     * @var bool
     *
     * @ORM\Column(name="vip", type="boolean", nullable=false)
     */
    private $vip;

    /**
     * @var \CoreUser
     *
     * @ORM\ManyToOne(targetEntity="CoreUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager", referencedColumnName="id")
     * })
     */
    private $manager;

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


}
