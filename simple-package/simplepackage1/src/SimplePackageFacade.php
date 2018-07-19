<?php
namespace jobayerccj\MyPackage;
use Illuminate\Support\Facades\Facade;
class SimplePackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simplepackage';
    }
}