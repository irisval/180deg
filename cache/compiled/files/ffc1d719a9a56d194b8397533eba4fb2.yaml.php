<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/lc/user/themes/lc/blueprints.yaml',
    'modified' => 1552997688,
    'data' => [
        'name' => 'Lc',
        'version' => '0.1.0',
        'description' => 'lc',
        'icon' => 'rebel',
        'author' => [
            'name' => 'lc',
            'email' => 'lc@lc.lc'
        ],
        'homepage' => 'https://github.com/lc/grav-theme-lc',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/lc/grav-theme-lc/issues',
        'readme' => 'https://github.com/lc/grav-theme-lc/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
