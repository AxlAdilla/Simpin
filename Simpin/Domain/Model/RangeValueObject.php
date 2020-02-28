<?php

namespace Simpin\Domain\Model;
use Carbon\Carbon;

class RangeValueObject{
    protected $range;
    public function __construct($range)
    {
        $this->range = $range;
    }
    public function getStart()
    {
        return Carbon::createFromFormat('Y-m-d',substr($this->range,0,10))->toDateTimeString();
    }
    public function getEnd()
    {
        return Carbon::createFromFormat('Y-m-d',substr($this->range,11))->toDateTimeString();
    }
}