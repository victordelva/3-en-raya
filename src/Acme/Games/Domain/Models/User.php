<?php
declare(strict_types=1);

namespace App\Acme\Games\Domain\Models;


use App\Acme\Shared\Domain\Models\UserId;

final class User
{
    public function __construct(private UserId $id)
    {
    }

    public function getId(): UserId
    {
        return $this->id;
    }

    public function equals(?User $user): bool
    {
        return !empty($user) && $user->getId()->equals($this->getId());
    }
}