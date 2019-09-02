<?php
namespace Illustrate\Auth\Events;
use Illustrate\Queue\SerializesModels;
class Authenticated {
    use SerializesModels;
    /**
     * The authentication guard name.
     *
     * @var string
     */
    public $guard;
    /**
     * The authenticated user.
     *
     * @var \Illustrate\Contracts\Auth\Authenticatable
     */
    public $user;
    /**
     * Create a new event instance.
     *
     * @param  string  $guard
     * @param  \Illustrate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function __construct($guard, $user) {
        $this->user = $user;
        $this->guard = $guard;
    }
}