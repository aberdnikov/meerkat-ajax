<?php
    Route::set('ajax', trim(Kohana::$config->load('meerkat/ajax.url'), '/')'/<controller>(/<action>)')
        ->defaults(
            array(
                'directory' => 'Ajax',
                'action'     => 'index',
            )
        );