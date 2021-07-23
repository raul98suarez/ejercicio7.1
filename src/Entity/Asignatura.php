<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignatura
 *
 * @ORM\Table(name="asignatura", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_9243D6CE20332D99", columns={"codigo"})}, indexes={@ORM\Index(name="IDX_9243D6CE91A441CC", columns={"grado_id"})})
 * @ORM\Entity
 */
class Asignatura
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
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_ingles", type="string", length=255, nullable=false)
     */
    private $nombreIngles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="credects", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $credects = NULL;

    /**
     * @var Grado
     *
     * @ORM\ManyToOne(targetEntity="Grado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grado_id", referencedColumnName="id")
     * })
     */
    private $grado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Alumno", inversedBy="asignatura")
     * @ORM\JoinTable(name="alumnos_asignaturas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="asignatura_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
     *   }
     * )
     */
    private $alumno;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumno = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Get the value of codigo
     *
     * @return  int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @param  int  $codigo
     *
     * @return  self
     */ 
    public function setCodigo(int $codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of nombreIngles
     *
     * @return  string
     */ 
    public function getNombreIngles()
    {
        return $this->nombreIngles;
    }

    /**
     * Set the value of nombreIngles
     *
     * @param  string  $nombreIngles
     *
     * @return  self
     */ 
    public function setNombreIngles(string $nombreIngles)
    {
        $this->nombreIngles = $nombreIngles;

        return $this;
    }

    /**
     * Get the value of credects
     *
     * @return  int|null
     */ 
    public function getCredects()
    {
        return $this->credects;
    }

    /**
     * Set the value of credects
     *
     * @param  int|null  $credects
     *
     * @return  self
     */ 
    public function setCredects($credects)
    {
        $this->credects = $credects;

        return $this;
    }

    /**
     * Get the value of grado
     *
     * @return  \Grado
     */ 
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set the value of grado
     *
     * @param  Grado  $grado
     *
     * @return  self
     */ 
    public function setGrado(Grado $grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get the value of alumno
     *
     * @return  \Doctrine\Common\Collections\Collection
     */ 
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set the value of alumno
     *
     * @param  \Doctrine\Common\Collections\Collection  $alumno
     *
     * @return  self
     */ 
    public function setAlumno(\Doctrine\Common\Collections\Collection $alumno)
    {
        $this->alumno = $alumno;

        return $this;
    }
}
