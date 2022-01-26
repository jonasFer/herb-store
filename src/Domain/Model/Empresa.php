<?php

namespace App\Domain\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Empresa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;
}