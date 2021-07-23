<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="nota", indexes={@ORM\Index(name="IDX_C8D03E0DFC28E5EE", columns={"alumno_id"}), @ORM\Index(name="IDX_C8D03E0DC5C70C5B", columns={"asignatura_id"})})
 * @ORM\Entity
 */
class Nota
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
     * @var int
     *
     * @ORM\Column(name="n_convocatoria", type="integer", nullable=false)
     */
    private $nConvocatoria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var float
     *
     * @ORM\Column(name="nota", type="float", precision=10, scale=0, nullable=false)
     */
    private $nota;

    /**
     * @var \Asignatura
     *
     * @ORM\ManyToOne(targetEntity="Asignatura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asignatura_id", referencedColumnName="id")
     * })
     */
    private $asignatura;

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     * })
     */
    private $alumno;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nConvocatoria
     *
     * @return  int
     */ 
    public function getNConvocatoria()
    {
        return $this->nConvocatoria;
    }

    /**
     * Set the value of nConvocatoria
     *
     * @param  int  $nConvocatoria
     *
     * @return  self
     */ 
    public function setNConvocatoria(int $nConvocatoria)
    {
        $this->nConvocatoria = $nConvocatoria;

        return $this;
    }

    /**
     * Get the value of fecha
     *
     * @return  \DateTime
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @param  \DateTime  $fecha
     *
     * @return  self
     */ 
    public function setFecha(\DateTime $fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of nota
     *
     * @return  float
     */ 
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     *
     * @param  float  $nota
     *
     * @return  self
     */ 
    public function setNota(float $nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get the value of asignatura
     *
     * @return  \Asignatura
     */ 
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * Get the value of asignatura
     *
     * @return  \Asignatura
     */ 
    public function getAsignaturaId()
    {
        return $this->asignatura->getId();
    }

    /**
     * Set the value of asignatura
     *
     * @param  Asignatura  $asignatura
     *
     * @return  self
     */ 
    public function setAsignatura(Asignatura $asignatura)
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    /**
     * Get the value of alumno
     *
     * @return  \Alumno
     */ 
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set the value of alumno
     *
     * @param  Alumno  $alumno
     *
     * @return  self
     */ 
    public function setAlumno(Alumno $alumno)
    {
        $this->alumno = $alumno;

        return $this;
    }
}
