<?php

namespace Acme\DemoBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class SecuredController__JMSInjector
{
    public static function inject($container) {
<<<<<<< HEAD
<<<<<<< HEAD
        require_once '/var/www/pabd/app/cache/dev/jms_diextra/proxies/Acme-DemoBundle-Controller-SecuredController.php';
=======
        require_once '/var/www/pabd/pabd/app/cache/dev/jms_diextra/proxies/Acme-DemoBundle-Controller-SecuredController.php';
>>>>>>> 1b1437be2fd660ba8208de365038ca7744718474
=======
        require_once '/var/www/pabad/pabd/app/cache/dev/jms_diextra/proxies/Acme-DemoBundle-Controller-SecuredController.php';
>>>>>>> 45bd36928e6b7a9c7282b3b8a5bf5286305a52fd
        $a = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Acme\\DemoBundle\\Controller\\SecuredController' => array('helloadminAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_72114c0f8683bcc2a66ceccb136abe5a78f8577e\__CG__\Acme\DemoBundle\Controller\SecuredController();
        $instance->__CGInterception__setLoader($a);
        return $instance;
    }
}
