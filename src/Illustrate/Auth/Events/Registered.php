<?php
namespace Illustrate\Auth\Events;
use Illustrate\Queue\SerializesModels;
class Registered {
    use SerializesModels;
    /**
     * The authenticated user.
     *
     * @var \Illustrate\Contracts\Auth\Authenticatable
     */
    public $user;
    /**
     * Create a new event instance.
     *
     * @param  \Illustrate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function __construct($user) {
        $this->user = $user;
    }
}