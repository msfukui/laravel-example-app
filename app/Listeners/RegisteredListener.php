<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Mailer;

final readonly class RegisteredListener
{
    public function __construct(
        private Mailer $mailer,
        private User $eloquent
    ) {}

    public function handle(Registered $event): void
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());

        $this->mailer->raw('会員登録を完了しました', function ($message) use ($user) {
            $message->to($user->email)->subject('会員登録メール');
        });
    }
}
