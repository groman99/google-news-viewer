<?php

return [
    'CATEGORIES' => [
        'slam' => [
            'title' => 'You\'ve Been Slammmmmmeeeeddddd!!!',
            'query' => 'slams+-dunk+-grand',
        ],
        'shame' => [
            'title' => 'Shame on You',
            'query' => 'shames+shamed+shaming+-walk',
        ],
        'bash' => [
            'title' => 'I\'ma Bash You Up Foo',
            //bash returns some results related to "parties" and "violence", we don't want that
            'query' => 'bashes+bashed+bashing+-party',
        ],
        'outrage' => [
            'title' => 'This is outrageous... I am outraged!',
            'query' => 'outrage+outraged',
        ],
        'took_to_twitter' => [
            'title' => 'OMG They Took to Twitter',
            'query' => '%22took+to+twitter%22',
        ],        
    ]
];