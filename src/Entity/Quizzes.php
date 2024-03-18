<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizzes
 *
 * @ORM\Table(name="quizzes", indexes={@ORM\Index(name="lesson_id", columns={"lesson_id"})})
 * @ORM\Entity
 */
class Quizzes
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

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
