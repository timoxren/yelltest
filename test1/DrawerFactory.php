<?php

class DrawerFactory
{
    function createDrawer($drawer, $figures)
    {
        $av_drawers = array_map(function($item) {
            $pos = strrpos($item, '.');
            return substr($item, 0, $pos);
        }, array_filter(scandir("drawers"), function($item) {            
            if (!in_array($item, ['.', '..']))
                return true; else return false;
        }));
        
        $drawerClass = ucfirst($drawer);
        if (in_array($drawerClass, $av_drawers)) {            
            return new $drawerClass($figures);
        }
    }
}