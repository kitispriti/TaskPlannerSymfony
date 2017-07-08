<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->setChildrenAttribute('class', 'nav nav-tabs');

        $menu->addChild('Home', array('route' => 'homepage'));

        $loggedIn = $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY');

        if (!$loggedIn) {
            $menu->addChild('Login', array('route' => 'fos_user_security_login'));
            $menu->addChild('Register', array('route' => 'fos_user_registration_register'));

        } else {
            $menu->addChild('Task', array('route' => 'task_index'));
            $menu->addChild('Category', array('route' => 'category_index'));
            $menu->addChild('Comments', array('route' => 'comments_index'));
            $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));
        }



        return $menu;
    }
}