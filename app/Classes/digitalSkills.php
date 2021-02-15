<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class digitalSkills extends Model
{
    private $name;
    private $level;
    public function __construct($name, $level, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->name = $name;
        $this->level = $level;
    }

    /**
     * @return string[]
     */
    public function getFillable(): array
    {
        return $this->fillable;
    }

    /**
     * @param string[] $fillable
     */
    public function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
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
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

}
