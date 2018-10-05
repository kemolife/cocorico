<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\MessageBundle\Event;


use Cocorico\CoreBundle\Event\ListingFormBuilderEvent;
use Cocorico\CoreBundle\Event\ListingFormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ListingSubscriber implements EventSubscriberInterface
{

    public function onAddNewFieldForm(ListingFormBuilderEvent $event)
    {
        $formBuilder = $event->getFormBuilder();
        $formBuilder
            ->add('ISBN', TextType::class);
    }


    public static function getSubscribedEvents()
    {
        return array(
            ListingFormEvents::LISTING_NEW_FORM_BUILD => array('onAddNewFieldForm', 1),
        );
    }
}