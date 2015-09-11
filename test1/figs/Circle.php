<?php

class Circle extends Figure
{   
    function draw()
    {
        //$this->params - параметры
        $figure = 'Circle with params: '.  json_encode($this->params);
        $this->drawByDrawer($figure);
    }
}
