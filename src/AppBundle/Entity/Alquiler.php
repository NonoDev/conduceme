<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Alquiler
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var integer
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Vehiculo")
     * @ORM\JoinColumn(nullable=false)
     *
     * @var Vehiculo
     */
    protected $vehiculo;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(nullable=false)
     *
     * @var Cliente
     */
    protected $cliente;

    /**
     * @ORM\Column(type="date")
     *
     * @var \DateTime
     */
    protected $fechaRecogida;

    /**
     * @ORM\Column(type="date", nullable=true)
     *
     * @var \DateTime
     */
    protected $fechaEntrega;

    /**
     * @ORM\Column(type="float")
     *
     * @var float
     */
    protected $kilometrosRecogida;

    /**
     * @ORM\Column(type="float", nullable=true)
     *
     * @var float
     */
    protected $kilometrosEntrega;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(nullable=false)
     *
     * @var Cliente
     */
    protected $operadorRecogida;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     *
     * @var Cliente
     */
    protected $operadorEntrega;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     * @var string
     */
    protected $observaciones;

    /**
     * @ORM\Column(type="float", nullable=true)
     *
     * @var float
     */
    protected $cobrado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaRecogida
     *
     * @param \DateTime $fechaRecogida
     * @return Alquiler
     */
    public function setFechaRecogida($fechaRecogida)
    {
        $this->fechaRecogida = $fechaRecogida;

        return $this;
    }

    /**
     * Get fechaRecogida
     *
     * @return \DateTime 
     */
    public function getFechaRecogida()
    {
        return $this->fechaRecogida;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Alquiler
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set kilometrosRecogida
     *
     * @param float $kilometrosRecogida
     * @return Alquiler
     */
    public function setKilometrosRecogida($kilometrosRecogida)
    {
        $this->kilometrosRecogida = $kilometrosRecogida;

        return $this;
    }

    /**
     * Get kilometrosRecogida
     *
     * @return float 
     */
    public function getKilometrosRecogida()
    {
        return $this->kilometrosRecogida;
    }

    /**
     * Set kilometrosEntrega
     *
     * @param float $kilometrosEntrega
     * @return Alquiler
     */
    public function setKilometrosEntrega($kilometrosEntrega)
    {
        $this->kilometrosEntrega = $kilometrosEntrega;

        return $this;
    }

    /**
     * Get kilometrosEntrega
     *
     * @return float 
     */
    public function getKilometrosEntrega()
    {
        return $this->kilometrosEntrega;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Alquiler
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set cobrado
     *
     * @param float $cobrado
     * @return Alquiler
     */
    public function setCobrado($cobrado)
    {
        $this->cobrado = $cobrado;

        return $this;
    }

    /**
     * Get cobrado
     *
     * @return float 
     */
    public function getCobrado()
    {
        return $this->cobrado;
    }

    /**
     * Set vehiculo
     *
     * @param \AppBundle\Entity\Vehiculo $vehiculo
     * @return Alquiler
     */
    public function setVehiculo(\AppBundle\Entity\Vehiculo $vehiculo)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * Get vehiculo
     *
     * @return \AppBundle\Entity\Vehiculo 
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    /**
     * Set cliente
     *
     * @param \AppBundle\Entity\Usuario $cliente
     * @return Alquiler
     */
    public function setCliente(\AppBundle\Entity\Usuario $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set operadorRecogida
     *
     * @param \AppBundle\Entity\Usuario $operadorRecogida
     * @return Alquiler
     */
    public function setOperadorRecogida(\AppBundle\Entity\Usuario $operadorRecogida)
    {
        $this->operadorRecogida = $operadorRecogida;

        return $this;
    }

    /**
     * Get operadorRecogida
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getOperadorRecogida()
    {
        return $this->operadorRecogida;
    }

    /**
     * Set operadorEntrega
     *
     * @param \AppBundle\Entity\Usuario $operadorEntrega
     * @return Alquiler
     */
    public function setOperadorEntrega(\AppBundle\Entity\Usuario $operadorEntrega = null)
    {
        $this->operadorEntrega = $operadorEntrega;

        return $this;
    }

    /**
     * Get operadorEntrega
     *
     * @return \AppBundle\Entity\Usuario 
     */
    public function getOperadorEntrega()
    {
        return $this->operadorEntrega;
    }
}
