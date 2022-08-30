<?php declare(strict_types=1);

namespace Heptacom\OpenAuth\Struct;

class UserStruct
{
    protected string $primaryEmail = '';

    /**
     * @var string[]
     */
    protected array $emails = [];

    protected string $firstName = '';

    protected string $lastName = '';

    protected string $displayName = '';

    protected ?string $timezone = null;

    protected ?string $locale = null;

    protected string $primaryKey = '';

    protected ?TokenPairStruct $tokenPair = null;

    protected array $passthrough = [];

    public function getPrimaryEmail(): string
    {
        return $this->primaryEmail;
    }

    public function setPrimaryEmail(string $primaryEmail): self
    {
        $this->primaryEmail = $primaryEmail;

        return $this;
    }

    public function getEmails(): array
    {
        return $this->emails;
    }

    public function setEmails(array $emails): self
    {
        $this->emails = $emails;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return UserStruct
     */
    public function setFirstName(string $firstName): UserStruct
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return UserStruct
     */
    public function setLastName(string $lastName): UserStruct
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    public function setPrimaryKey(string $primaryKey): self
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    public function getTokenPair(): ?TokenPairStruct
    {
        return $this->tokenPair;
    }

    public function setTokenPair(?TokenPairStruct $tokenPair): self
    {
        $this->tokenPair = $tokenPair;

        return $this;
    }

    public function getPassthrough(): array
    {
        return $this->passthrough;
    }

    /**
     * @param mixed $value
     */
    public function addPassthrough(string $key, $value): self
    {
        $this->passthrough[$key] = $value;

        return $this;
    }

    public function setPassthrough(array $passthrough): self
    {
        $this->passthrough = $passthrough;

        return $this;
    }
}
