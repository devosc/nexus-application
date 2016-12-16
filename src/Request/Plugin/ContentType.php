<?php
/**
 *
 */

namespace Request\Plugin;

use Mvc5\Plugin\ScopedCall;
use Mvc5\Plugin\Shared;

class ContentType
    extends Shared
{
    /**
     * @param $name
     */
    function __construct($name = 'content_type')
    {
        parent::__construct($name, new ScopedCall($this));
    }

    /**
     * @return \Closure
     */
    function __invoke()
    {
        return function() {
            /** @var \Request\Config $this */
            return $this->http->getContentType();
        };
    }
}