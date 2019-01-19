<?php namespace Avirdigital\Courier\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CarController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'car' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Avirdigital.Courier', 'main-menu-courier', 'side-menu-car');
    }
}
