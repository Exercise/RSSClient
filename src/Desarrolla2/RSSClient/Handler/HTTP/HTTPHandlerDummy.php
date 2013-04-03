<?php

/**
 * This file is part of the RSSClient proyect.
 *
 * Copyright (c)
 * Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

namespace Desarrolla2\RSSClient\Handler\HTTP;

use \Desarrolla2\RSSClient\Handler\HTTP\HTTPHandlerInterface;

/**
 *
 * Description of HTTPHandlerDummy
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 * @file : HTTPHandlerDummy.php , UTF-8
 * @date : Mar 22, 2013 , 11:46:34 AM
 */
class HTTPHandlerDummy implements HTTPHandlerInterface
{
    public function get($resource)
    {
        return file_get_contents($resource);
    }

}
