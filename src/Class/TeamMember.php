<?php

namespace App\Class;

class TeamMember
{
    private string $firstname;
    private string $lastname;
    private \DateTime $dateOfBirth;
    private string $creatorOf;
    private string $picture;
    private string $description;

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getDateOfBirth(): \DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getCreatorOf(): string
    {
        return $this->creatorOf;
    }

    public function setCreatorOf(string $creatorOf): void
    {
        $this->creatorOf = $creatorOf;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}