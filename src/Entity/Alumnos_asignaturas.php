<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos_asignaturas
 *
 * @ORM\Table(name="alumnos_asignaturas")
 * @ORM\Entity
 */
class Alumnos_asignaturas
{
    /**
     * @var int
     *
     * @ORM\Column(name="asignatura_id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $asignaturaId;

     /**
     * @var int
     *
     * @ORM\Column(name="alumno_id", type="integer", nullable=false)
     */
    private $alumnoId;

    /**
     * Get the value of asignaturaId
     *
     * @return  int
     */ 
    public function getAsignaturaId()
    {
        return $this->asignaturaId;
    }

    /**
     * Set the value of asignaturaId
     *
     * @param  int  $asignaturaId
     *
     * @return  self
     */ 
    public function setAsignaturaId(int $asignaturaId)
    {
        $this->asignaturaId = $asignaturaId;

        return $this;
    }

    /**
     * Get the value of alumnoId
     *
     * @return  int
     */ 
    public function getAlumnoId()
    {
        return $this->alumnoId;
    }

    /**
     * Set the value of alumnoId
     *
     * @param  int  $alumnoId
     *
     * @return  self
     */ 
    public function setAlumnoId(int $alumnoId)
    {
        $this->alumnoId = $alumnoId;

        return $this;
    }

    public function setAll(int $asignaturaId,int $alumnoId)
    {
        $this->asignaturaId = $asignaturaId;
        $this->alumnoId = $alumnoId;

        return $this;
    }
}