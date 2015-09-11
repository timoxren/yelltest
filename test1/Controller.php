<?php

class Controller
{
	function drawAction($drawer, $figures)
	{
        $d = DrawerFactory::createDrawer($drawer, $figures);
        $d->drawFigs();
	}
}