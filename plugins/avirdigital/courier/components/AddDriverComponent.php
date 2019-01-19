<?php namespace Avirdigital\Courier\Components;

use Avirdigital\Courier\Models\Brand;
use Avirdigital\Courier\Models\Car;
use Avirdigital\Courier\Models\Color;
use Avirdigital\Courier\Models\Driver;
use Avirdigital\Courier\Models\Mdl;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AddDriverComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'AddDriver',
            'description' => 'Add Driver Page Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $this->page['brands'] = $this->listBrand();
        $this->page['colors'] = $this->listcOLOR();
    }

    protected function listBrand()
    {
        $model = new Brand();
        return $model->where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    }

    protected function listColor()
    {
        $model = new Color();
        return $model->where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    }

    public function onModel()
    {
        $brand_id = post('brand_id');
        $model = Brand::where('id', $brand_id)->first();
        $this->page['partialsRecords'] = $model->mdls;

    }

    public function onTrim()
    {
        $mdl_id = post('mdl_id');
        $model = Mdl::where('id', $mdl_id)->first();

        $this->page['partialsRecords'] = $model->trims;
    }

    public function onAddDriverSave()
    {

        $user = User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'is_activated' => 1,
            'activated_at' => Carbon::now(),
            'is_driver' => 1,
        ]);
        $car = Car::create([
            'brand_id' => request('brand_id'),
            'mdl_id' => request('mdl_id'),
            'trim_id' => request('trim_id'),
            'color_id' => request('color_id'),
            'year' => request('year'),
            'car_number' => request('car_number'),

        ]);

        $data = Input::only('id_card_front', 'id_card_back', 'driver_license_front', 'driver_license_back','drivertype_id');
        $data['user_id'] = $user->id;
        $data['car_id'] = $car->id;
        $driver = Driver::create($data);

        /*if (\request()->file('id_card_front')) {
            $id_card_front = Storage::disk("uploads")->putFile("/uploads/public/drivers", \request()->file('id_card_front'));
            $data['id_card_front'] = '/storage/app/' . $id_card_front;
        }
        if (\request()->file('id_card_back')) {
            $id_card_back = Storage::disk("uploads")->putFile("/uploads/public/drivers", \request()->file('id_card_back'));
            $data['id_card_back'] = '/storage/app/' . $id_card_back;
        }
        if (\request()->file('driver_license_front')) {
            $driver_license_front = Storage::disk("uploads")->putFile("/uploads/public/drivers", \request()->file('driver_license_front'));
            $data['driver_license_front'] = '/storage/app/' . $driver_license_front;
        }
        if (\request()->file('driver_license_back')) {
            $driver_license_back = Storage::disk("uploads")->putFile("/uploads/public/drivers", \request()->file('driver_license_back'));
            $data['driver_license_back'] = '/storage/app/' . $driver_license_back;
        }

        $driver = Driver::create($data);*/
    }


}
