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

    public $login = [
        'email' => 'required|valid_email',
        'password' => 'required',
        'checkbox' => 'String'
    ];

    public $login_errors = [
        'email' => [
            'required' => 'Bitte tragen Sie eine gültige E-Mail ein.'],
        'password' => [
            'required' => 'Bitte geben Sie ein Passwort ein.'],
        'checkbox' => [
            'String' => 'Vor dem Login müssen die AGB\'s akzeptiert werden.']
    ];

}
