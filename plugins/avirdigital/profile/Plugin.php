<?php namespace Avirdigital\Profile;

use System\Classes\PluginBase;
Use RainLab\User\Controllers\Users as UserController;
use RainLab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {

        UserModel::extend(function($model) {
            $model->addFillable([
                'activated_at',
                'is_activated',
                'is_driver',
                'phone',
                'ip_address'
            ]);
            $model->rules['phone'] = 'required|unique:users';
            $model->rules['username'] = 'nullable';
            $model->rules['password'] = 'nullable';
            $model->rules['password_confirmation'] = 'nullable';
        });

        UserController::extendFormFields(function ($form, $model, $context) {
            $form->addTabFields([

                'is_driver' => [
                    'label' => 'Is Driver',
                    'type' => 'switch',
                    'tab' => 'Profile',
                ],
                'phone' => [
                    'label' => 'Phone',
                    'type' => 'text',
                    'tab' => 'Profile',
                ],
                'ip_address' => [
                    'label' => 'Ip Address',
                    'type' => 'text',
                    'tab' => 'Profile',
                ],
            ]);
        });
    }
}
