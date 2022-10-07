<?php

namespace App\Mailer;
use Symfony\Component\Mime\Email; 
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Address;

class MyMailer {

    public function __construct(Address $cc, string $subject, string $content)
    {
        $transport = Transport::fromDsn($_ENV['MAILER_DSN']);
        $mailer = new Mailer($transport);
        $mailer->send($this->createEmail($cc, $subject, $content));
    }

    public function createEmail(Address $to, string $subject, string $content) : email {
        $email = (new Email()) 
        ->from($_ENV['MAIL_FROM'])
        ->to($to)
        ->priority(Email::PRIORITY_HIGHEST)
        ->subject($subject)
        ->html($content);

        return $email;
    }

}