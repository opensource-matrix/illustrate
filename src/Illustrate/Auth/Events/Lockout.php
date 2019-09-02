<?php
namespace Illustrate\Auth\Events;
use Illustrate\Http\Request;
class Lockout {
    /**
     * The throttled request.
     *
     * @var \Illustrate\Http\Request
     */
    public $request;
    /**
     * Create a new event instance.
     *
     * @param  \Illustrate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }
}