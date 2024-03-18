<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="quiz_id", columns={"quiz_id"})})
 * @ORM\Entity
 */
class Questions
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="Question text"})
     */
    private $content;

    /**
     * @var \Quizzes
     *
     * @ORM\ManyToOne(targetEntity="Quizzes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     * })
     */
    private $quiz;


}
