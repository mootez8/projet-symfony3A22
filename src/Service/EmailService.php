<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;

class EmailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendResponseEmail($recipient, $subject, $body)
    {
        // Utilisation de l'alias pour masquer l'adresse email
        $email = (new Email())
            ->from(new Address('eventgo@gmail.com', 'EventGo'))  // Masquer l'email, afficher le nom 'Support EventGo'
            ->to($recipient)
            ->subject($subject)
            ->html($body);

        $this->mailer->send($email);
    }
}

