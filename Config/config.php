<?php

return [
    'name'        => 'MauticExtendeeToolsBundle',
    'description' => 'Extend your Mautic with awesome features',
    'author'      => 'mtcextendee.com',
    'version'     => '1.0.1',
    'routes'      => [
        'main' => [
            'mautic_plugin_extendee' => [
                'path'       => '/extendee/tools/{objectAction}/{objectId}',
                'controller' => 'MauticExtendeeToolsBundle:ExtendeeTools:execute',
            ],
        ],
    ],
    'services'    => [
        'events' => [
            'mautic.plugin.extendee.button.subscriber' => [
                'class'     => \MauticPlugin\MauticExtendeeToolsBundle\EventListener\ButtonSubscriber::class,
                'arguments' => [
                    'mautic.helper.integration',
                ],
            ],
        ],
        'others' => [
            'mautic.plugin.extendee.helper' => [
                'class' => \MauticPlugin\MauticExtendeeToolsBundle\Helper\ExtendeeToolsHelper::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'mautic.helper.integration'
                ],
            ],
        ],
        'integrations' => [
            'mautic.integration.ECronTester' => [
                'class'     => \MauticPlugin\MauticExtendeeToolsBundle\Integration\ECronTesterIntegration::class,
                'arguments' => [
                    'mautic.plugin.extendee.helper',
                ],
            ],
        ],
    ],
];
