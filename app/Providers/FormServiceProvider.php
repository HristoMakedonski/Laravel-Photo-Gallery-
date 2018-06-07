<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'componets.form.text',['name', 'value' => null , 'attributes'=> []]);
        Form::component('textarea', 'componets.form.textarea',['name', 'value' => null , 'attributes'=> []]);
        Form::component('submit', 'componets.form.submit',['value' => 'Submit', 'attributes'=> []]);
        Form::component('hidden', 'componets.form.hidden',['name', 'value' => null , 'attributes'=> []]);
        Form::component('fail', 'componets.form.fail',['name', 'attributes'=> []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
