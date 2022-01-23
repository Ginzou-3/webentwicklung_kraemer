<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'      => 'CodeIgniter\Validation\Views\list',
        'single'    => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $personenbearbeiten = [
        'username'  => 'required',
        'email'     => 'required',
        'password'  => 'required|integer|min_length[2]'
    ];

    public $personenbearbeiten_error =[
        'username'      =>[
            'required'      => 'Bitte tragen Sie einen Namen ein'
        ],
        'email'     =>[
            'required'      => 'Bitte tragen Sie eine Email ein'
        ],
        'password'  =>[
            'required'      => 'Bitte tragen Sie ein Password ein',
            'integer'       => 'Bitte nur Zahlenwerte eintragen',
            'min_length'    => 'Mindestens 3 Zeichen',
        ]
    ];

}
