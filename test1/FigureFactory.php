<?php

class FigureFactory
{
    static function createFigure($fig, $drawer)
    {
        $av_figs = array_map(function($item) {
            $pos = strrpos($item, '.');
            return substr($item, 0, $pos);
        }, array_filter(scandir("figs"), function($item) {            
            if (!in_array($item, ['.', '..']))
                return true; else return false;
        }));
        
        $figClass = ucfirst($fig['type']);
        if (in_array($figClass, $av_figs)) {            
            return new $figClass($fig['params'], $drawer);
        }
    }
}