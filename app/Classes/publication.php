<?php

namespace App\Classes;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class publication extends Model
{
    private $name;
    private $content;
    private $year;
public $id;
    /**
     * publication constructor.
     * @param $name
     * @param $content
     * @param $year
     */
    public function __construct($name, $content, $year,$id, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

}
