<?php
namespace Illustrate\Auth\Events;
use Illustrate\Queue\SerializesModels;
class Verified {
    use SerializesModels;
    /**
     * The verified user.
     *
     * @var \Illustrate\Contracts\Auth\MustVerifyEmail
     */
    public $user;
    /**
     * Create a new event instance.
     *
     * @param  \Illustrate\Contracts\Auth\MustVerifyEmail  $user
     * @return void
     */
    public function __construct($user) {
        $this->user = $user;
    }
}