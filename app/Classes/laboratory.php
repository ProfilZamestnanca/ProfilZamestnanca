<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    public $id;
    public $name;
    public function __construct($name,$id, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->id = $id;
        $this->name = $name;
    }
}
