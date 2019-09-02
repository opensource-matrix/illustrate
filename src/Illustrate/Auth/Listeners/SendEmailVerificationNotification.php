<?php
namespace Illustrate\Auth\Listeners;
use Illustrate\Auth\Events\Registered;
use Illustrate\Contracts\Auth\MustVerifyEmail;
class SendEmailVerificationNotification {
    /**
     * Handle the event.
     *
     * @param  \Illustrate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event) {
        if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
            $event->user->sendEmailVerificationNotification();
        }
    }
}