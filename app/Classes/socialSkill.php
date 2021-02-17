<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class socialSkill extends Model
{
 public $name;
 public $id;
    public function __construct($name, $id, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->id = $id;
        $this->name = $name;
    }
}
