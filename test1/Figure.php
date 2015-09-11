<?php

abstract class Figure
{
    protected $params;
    protected $drawer;
    function __construct($params, $drawer) {
        $this->params = $params;
        $this->drawer = $drawer;
    }
    
    abstract function draw();
    function drawByDrawer($figure)
    {
        $this->drawer->drawFigure($figure);
    }
}
