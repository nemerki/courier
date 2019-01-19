<?php namespace Avirdigital\Courier\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ColorController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'color' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Avirdigital.Courier', 'main-menu-courier', 'side-menu-color');
    }
}
