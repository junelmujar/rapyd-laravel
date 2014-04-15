<?php namespace Zofe\Rapyd\DataGrid;

use Zofe\Rapyd\Widget;

class Column extends Widget
{

    public $url             = "";
        
    public $link            = "";
    public $linkRoute       = "";
    
    public $label           = "";
    public $attributes      = array();
    public $transform       = null;
    public $tr_attributes   = array();
    public $tr_attr         = array();
    public $orderby         = null;
    protected $pattern      = "";
    protected $pattern_type = null;
    protected $row_as       = null;
    protected $field        = null;
    protected $field_name   = null;
    protected $field_list   = array();

    public $orderby_asc_url;
    public $orderby_desc_url;

    public function __construct($name, $label = null, $orderby = false, $attributes = null, $transform = null)
    {
        $this->name = $name;
        $this->label($label);
        $this->orderby($orderby);
        $this->attributes($attributes);
        $this->transforms($transform);
    }
    
    protected function label($label)
    {
        $this->label = $label;
    }

    protected function orderby($orderby)
    {
        $this->orderby = $orderby;
        return $this;
    }

    protected function url($url, $img = '')
    {
        $this->url = $url;
        $this->img = $img;
        return $this;
    }
     
    public function attributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }
    
    public function transforms($transform)
    {
        $this->transform = $transform;
        return $this;
    }    
}
