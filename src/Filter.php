<?php

namespace ByKit\Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * 
 * @method static mixed addListener(string|array $hook, mixed $callback,int  $priority)
 * @method static \ByKit\Laravel\Hook\FilterHook removeListener(string  $hook)
 * @method static array getListeners()
 * @method static mixed fire(string  $action,array  $args)
 *
 * @see \ByKit\Laravel\Filter
 */
class Filter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ByKit\Laravel\Hook\FilterHook::class;
    }
}
