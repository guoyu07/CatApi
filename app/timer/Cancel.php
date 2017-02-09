<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 17/2/9
 * Time: 23:52
 */
namespace timer;

use base\timer\ITimer;
use base\timer\Timer;

class Cancel extends ITimer
{

    public function doAction()
    {
        Timer::tick_cancel($this->params['ms'], $this->params['name'], $this->params['key']);
    }
}