<?php

namespace App\Entity;

use App\Repository\TriangleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TriangleRepository::class)
 */
class Triangle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $a;

    /**
     * @ORM\Column(type="integer")
     */
    private $b;

    /**
     * @ORM\Column(type="integer")
     */
    private $c;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $opseg;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $povrsina;

    public function __construct($a, $b, $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
        $this->setOpseg();
        $this->setPovrsina();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getA(): ?int
    {
        return $this->a;
    }

    public function setA(int $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getB(): ?int
    {
        return $this->b;
    }

    public function setB(int $b): self
    {
        $this->b = $b;

        return $this;
    }

    public function getC(): ?int
    {
        return $this->c;
    }

    public function setC(int $c): self
    {
        $this->c = $c;

        return $this;
    }

    public function setOpseg(): self
    {
        $this->opseg = $this->getA()+$this->getB()+$this->getC();

        return $this;
    }

    public function getOpseg(): ?int
    {
        return $this->opseg;
    }


    public function getPovrsina(): ?float
    {
        return $this->povrsina;
    }

    public function setPovrsina(): self
    {
        $zbr = ($this->getA()+$this->getB()+$this->getC()) / 2;
        $this->povrsina = sqrt(($zbr) * ( $zbr - $this->getA()) * ($zbr - $this->getB()) * ( $zbr -$this->getC()));

        return $this;
    }
}
