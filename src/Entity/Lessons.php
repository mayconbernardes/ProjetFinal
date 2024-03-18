<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lessons
 *
 * @ORM\Table(name="lessons", indexes={@ORM\Index(name="language_id", columns={"language_id"})})
 * @ORM\Entity
 */
class Lessons
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="Lesson content in audio and text format"})
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \Languagesv2
     *
     * @ORM\ManyToOne(targetEntity="Languagesv2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;


}
