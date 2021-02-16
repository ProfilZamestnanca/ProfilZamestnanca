<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class title extends Model
{
    public $id;
    private $titleType;
    private $titleShortcut;
    private $school;
    private $year;

    public function __construct($titleType, $titleShortcut, $year, $school, $id, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->id = $id;
        $this->school = $school;
        $this->titleType = $titleType;
        $this->titleShortcut = $titleShortcut;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school): void
    {
        $this->school = $school;
    }

    /**
     * @return mixed
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * @param mixed $titleType
     */
    public function setTitleType($titleType): void
    {
        $this->titleType = $titleType;
    }

    /**
     * @return mixed
     */
    public function getTitleShortcut()
    {
        return $this->titleShortcut;
    }

    /**
     * @param mixed $titleShortcut
     */
    public function setTitleShortcut($titleShortcut): void
    {
        $this->titleShortcut = $titleShortcut;
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
