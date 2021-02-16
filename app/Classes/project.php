<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public $id;
    private $name;
    private $year;

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

    /**
     * project constructor.
     * @param $name
     * @param $year
     */
    public function __construct($name, $year, $id, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->id = $id;
        $this->name = $name;
        $this->year = $year;
    }
}
