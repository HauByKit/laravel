<?php

namespace ByKit\Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * 
 * @method static mixed addListener(string|array $hook, mixed $callback,int  $priority)
 * @method static \ByKit\Laravel\Hook\ActionHook removeListener(string  $hook)
 * @method static array getListeners()
 * @method static mixed fire(string  $action,array  $args)
 *
 * @see \ByKit\Laravel\Action
 */
class Action extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ByKit\Laravel\Hook\ActionHook::class;
    }
}
