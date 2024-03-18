<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languagesv2
 *
 * @ORM\Table(name="languagesV2")
 * @ORM\Entity
 */
class Languagesv2
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=2, nullable=true, options={"comment"="language code"})
     */
    private $code;


}
