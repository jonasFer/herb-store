<?php

namespace App\Domain\Model\Produto;

use App\Infrastructure\Doctrine\Repository\Produto\MarcaRepository;
use App\Domain\Model\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarcaRepository::class)
 */
class Marca
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Model\Empresa")
     */
    private Empresa $empresa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $nome;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Empresa
     */
    public function getEmpresa(): Empresa
    {
        return $this->empresa;
    }

    /**
     * @param Empresa $empresa
     */
    public function setEmpresa(Empresa $empresa): void
    {
        $this->empresa = $empresa;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

}
