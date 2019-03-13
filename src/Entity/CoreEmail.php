<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreEmail
 *
 * @ORM\Table(name="core_email")
 * @ORM\Entity
 */
class CoreEmail
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
     * @ORM\Column(name="state", type="string", length=200, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="blind_copied", type="string", length=200, nullable=false)
     */
    private $blindCopied;

    /**
     * @var string
     *
     * @ORM\Column(name="content_type", type="string", length=1000, nullable=false)
     */
    private $contentType;

    /**
     * @var string
     *
     * @ORM\Column(name="copied", type="string", length=4000, nullable=false)
     */
    private $copied;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="error_string", type="string", length=1000, nullable=false)
     */
    private $errorString;

    /**
     * @var string
     *
     * @ORM\Column(name="headers", type="blob", length=65535, nullable=false)
     */
    private $headers;

    /**
     * @var string
     *
     * @ORM\Column(name="importance", type="string", length=40, nullable=false)
     */
    private $importance;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer", nullable=false)
     */
    private $weight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=false)
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="body_text", type="string", length=8000, nullable=false)
     */
    private $bodyText;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40, nullable=false, options={"default"="received"})
     */
    private $type = 'received';


}
