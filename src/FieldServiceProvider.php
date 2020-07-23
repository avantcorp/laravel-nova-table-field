<?php

namespace Avant\LaravelNovaTableField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('laravel-nova-table-field', __DIR__ . '/../dist/js/field.js');
        });
    }
}
