<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1435D52DC1E70A7F", columns={"telefono"}), @ORM\UniqueConstraint(name="UNIQ_1435D52D67E69CFE", columns={"n_expediente"}), @ORM\UniqueConstraint(name="UNIQ_1435D52DE7927C74", columns={"email"})}, indexes={@ORM\Index(name="IDX_1435D52D91A441CC", columns={"grado_id"})})
 * @ORM\Entity
 */
class Alumno
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
     * @ORM\Column(name="n_expediente", type="integer", nullable=false)
     */
    private $nExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=false)
     */
    private $apellidos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true, options={"default"="NULL"})
     */
    private $fechaNacimiento = 'NULL';

    /**
     * @var bool
     *
     * @ORM\Column(name="sexo", type="boolean", nullable=false)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $telefono = 'NULL';

    /**
     * @var \Grado
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
     * @ORM\ManyToMany(targetEntity="Asignatura", mappedBy="alumno")
     */
    private $asignatura;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asignatura = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get the value of nExpediente
     *
     * @return  int
     */ 
    public function getNExpediente()
    {
        return $this->nExpediente;
    }

    /**
     * Set the value of nExpediente
     *
     * @param  int  $nExpediente
     *
     * @return  self
     */ 
    public function setNExpediente(int $nExpediente)
    {
        $this->nExpediente = $nExpediente;

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
     * Get the value of apellidos
     *
     * @return  string
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @param  string  $apellidos
     *
     * @return  self
     */ 
    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of fechaNacimiento
     *
     * @return  \DateTime|null
     */ 
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set the value of fechaNacimiento
     *
     * @param  \DateTime|null  $fechaNacimiento
     *
     * @return  self
     */ 
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get the value of sexo
     *
     * @return  bool
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @param  bool  $sexo
     *
     * @return  self
     */ 
    public function setSexo(bool $sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefono
     *
     * @return  string|null
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @param  string|null  $telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of grado
     *
     * @return  Grado
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
     * Get the value of asignatura
     *
     * @return  \Doctrine\Common\Collections\Collection
     */ 
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * Set the value of asignatura
     *
     * @param  \Doctrine\Common\Collections\Collection  $asignatura
     *
     * @return  self
     */ 
    public function setAsignatura(\Doctrine\Common\Collections\Collection $asignatura)
    {
        $this->asignatura = $asignatura;

        return $this;
    }
}
