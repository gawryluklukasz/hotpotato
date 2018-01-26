<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 * @ApiResource()
 * @author Łukasz Gawryluk <gawryluklukasz@gmail.com>
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * Set base field
     */
    public function __construct()
    {
        $this->created = new DateTime();
    }

    /**
     * @return int
     */
    function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    function getText(): string
    {
        return $this->text;
    }

    /**
     * @return DateTime
     */
    function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param string $text
     */
    function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param DateTime $created
     */
    function setCreated(DateTime $created)
    {
        $this->created = $created;
    }
}
