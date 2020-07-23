<?php

namespace Avant\LaravelNovaTableField;

use Laravel\Nova\Fields\Field;

class LaravelNovaTableField extends Field
{
    public $component = 'laravel-nova-table-field';
    public $showOnCreation = false;
    public $showOnUpdate = false;
}
