<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/lc/user/themes/lc/blueprints/article.yaml',
    'modified' => 1553776752,
    'data' => [
        'title' => 'Article',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'job' => [
                            'type' => 'tab',
                            'title' => 'Edit Content',
                            'fields' => [
                                'header.link' => [
                                    'type' => 'text',
                                    'label' => 'article link',
                                    'default' => 'https://www.google.com/',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.title' => [
                                    'type' => 'text',
                                    'label' => 'title',
                                    'default' => 'How to Lorem Ipsum Lorem Ipsum',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.description' => [
                                    'type' => 'text',
                                    'label' => 'article description',
                                    'default' => 'At vero eos et accusamus et iusto odio. Nam libero tempore, cum soluta nobis est bleh.',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.author' => [
                                    'type' => 'text',
                                    'label' => 'author',
                                    'default' => 'Jane Doe',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.tags' => [
                                    'type' => 'text',
                                    'label' => 'tags',
                                    'default' => '/#community',
                                    'validate' => [
                                        'type' => 'required'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
