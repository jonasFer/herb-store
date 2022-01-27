<?php

namespace App\Domain\Model\Produto;

use App\Domain\Model\Empresa;
use App\Domain\Model\Produto\Marca;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarcaRepository::class)
 */
class Produto
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
     * @ORM\ManyToOne(targetEntity="App\Domain\Model\Marca")
     */
    private Marca $marca;

    /**
     * @ORM\Column(type="integer")
     */
    private int $codico_barras;
    
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
     * @param int $codigo_barras
     */
    public function setCodigoBarras(int $codico_barras): void
    {
        $this->codico_barras = $codico_barras;
    }

    /**
     * @return int
     */
    public function getCodigBarras(): int
    {
        return $this->codico_barras;
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
     * @return Marca
     */
    public function getMarca(): Marca
    {
        return $this->marca;
    }

    /**
     * @param Marca $marca
     */
    public function setMarca(Marca $marca): void
    {
        $this->marca = $marca;
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
