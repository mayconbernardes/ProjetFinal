<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Options
 *
 * @ORM\Table(name="options", indexes={@ORM\Index(name="question_id", columns={"question_id"})})
 * @ORM\Entity
 */
class Options
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true, options={"comment"="Option text"})
     */
    private $content;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_correct", type="boolean", nullable=true, options={"comment"="Indicates if this option is correct"})
     */
    private $isCorrect;

    /**
     * @var \Questions
     *
     * @ORM\ManyToOne(targetEntity="Questions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;


}
