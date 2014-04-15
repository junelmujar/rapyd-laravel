<?php namespace Zofe\Rapyd\DataGrid;

class Cell
{

    public $data = "";
    public $attributes = "";

    public function __construct($data = null, $attributes = null)
    {
        $this->data = $data;
        $this->attributes($attributes);
    }

    protected function data($data)
    {
        $this->data = $data;
        return $this;
    }
     
    public function attributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }
    
}
