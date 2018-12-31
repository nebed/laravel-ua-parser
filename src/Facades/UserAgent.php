<?php
namespace Nebed\UserAgent\Facades;
use Illuminate\Support\Facades\Facade;
class UserAgent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'useragent';
    }
}