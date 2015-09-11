<?php

abstract class AbstractDrawer
{
    protected $figs;
    
    function __construct($figs)
    {        
        foreach($figs as $fig) {
            $this->figs []= FigureFactory::createFigure($fig, $this);
        }        
    }
    
    function drawFigs()
    {
        foreach($this->figs as $fig) {
            $fig->draw(); echo "\n\r<br/>";
        }
    }
    
    abstract function drawFigure($figure);
}