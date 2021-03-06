<?php
/**
 * @link      https://github.com/dk2103/auth-template
 * @copyright Copyright (c) 2018 MEIKO Maschinenbau GmbH & Co. KG
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @author    Daniel Kopf
 */
namespace Meiko\Authentication\Event;

use Zend\EventManager\Event;

abstract class LoginEvent extends Event
{

    const PRELOGIN = 'runPreLogin';

    const POSTLOGIN = 'runPostLogin';
}