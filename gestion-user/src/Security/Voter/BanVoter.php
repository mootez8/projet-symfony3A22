<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class BanVoter extends Voter
{
    protected function supports(string $attribute, mixed $subject): bool
    {
        // This voter handles all attributes
        return true;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        
        // If the user is not logged in, deny access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // If the user is banned, deny access to everything except the login page
        if ($user instanceof User && $user->isBanned()) {
            return false;
        }

        // For non-banned users, allow access
        return true;
    }
} 