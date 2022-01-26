<?php

namespace App\Infrastructure\Doctrine\Repository\Produto;

use App\Domain\Model\Produto\Marca;
use App\Domain\Repository\Produto\MarcaRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MarcaRepository extends ServiceEntityRepository implements MarcaRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Marca::class);
    }
}