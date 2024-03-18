<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediasv2
 *
 * @ORM\Table(name="mediasV2", indexes={@ORM\Index(name="lesson_id", columns={"lesson_id"})})
 * @ORM\Entity
 */
class Mediasv2
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
     * @ORM\Column(name="content", type="string", length=255, nullable=true, options={"comment"="Audio, Video, etc."})
     */
    private $content;

    /**
     * @var \Lessons
     *
     * @ORM\ManyToOne(targetEntity="Lessons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lesson_id", referencedColumnName="id")
     * })
     */
    private $lesson;


}
