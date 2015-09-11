<?php

class Square extends Figure
{
    function draw()
    {
        //$this->params - параметры
        $figure = 'Square with params: '.json_encode($this->params);
        $this->drawByDrawer($figure);        
    }
}