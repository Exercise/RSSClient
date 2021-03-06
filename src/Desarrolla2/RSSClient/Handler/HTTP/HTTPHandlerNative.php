<?php

/**
 * This file is part of the RSSClient project.
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
 * HTTPHandlerNative its a HTTP Handler to do test
 *
 * @author : Daniel González Cerviño <daniel.gonzalez@freelancemadrid.es>
 */
class HTTPHandlerNative implements HTTPHandlerInterface
{
    public function get($resource, $headers = null)
    {
        return file_get_contents($resource);
    }
}
