<?php
return [
    [
        'key' => 'themex',
        'name' => 'ThemeX',
        'sort' => 1
    ],
    [
        'key' => 'themex.settings',
        'name' => 'Fuck you zaher',
        'sort' => 1,
    ],
    [
        'key' => 'themex.settings.settings',
        'name' => 'Fuck you zaher',
        'sort' => 1,
        'fields' => [
            [
                'name'          => 'weight_unit',
                'title'         => 'admin::app.admin.system.weight-unit',
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'lbs',
                        'value' => 'lbs',
                    ], [
                        'title' => 'kgs',
                        'value' => 'kgs',
                    ],
                ],
                'channel_based' => true
            ]
        ]
    ]
];