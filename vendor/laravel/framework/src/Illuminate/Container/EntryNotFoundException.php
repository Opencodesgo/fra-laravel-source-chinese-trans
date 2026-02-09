<?php
/**
 * Illuminate，容器，绑定方法，条目未找到异常
 */

namespace Illuminate\Container;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

class EntryNotFoundException extends Exception implements NotFoundExceptionInterface
{
    //
}
