<?php

namespace languedo;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProgress
 *
 * @ORM\Table(name="user_progress", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="lesson_id", columns={"lesson_id"})})
 * @ORM\Entity
 */
class UserProgress
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
     * @var bool|null
     *
     * @ORM\Column(name="completed", type="boolean", nullable=true)
     */
    private $completed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="progress_percentage", type="integer", nullable=true, options={"comment"="User progress in percentage"})
     */
    private $progressPercentage;

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

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
