<?php

namespace App\Entity;

use App\Repository\RegistrationTokenRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegistrationTokenRepository::class)]
class RegistrationToken
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::GUID)]
    private ?string $token = null;

    #[ORM\OneToOne(targetEntity: 'App\Entity\User')]
    #[ORM\JoinColumn(name: 'user_id',nullable: false)]
    private ?User $userId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->userId;
    }

    public function setUserId(user $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
