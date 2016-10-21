<?php
/**
 *
 */

namespace User;

use Mvc5\Config\Configuration;

interface User
    extends Configuration
{
    /**
     * @return bool
     */
    function authenticated();

    /**
     * @return string
     */
    function username();
}
