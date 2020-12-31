<?php

namespace Eurecab\Finder\Algorithm;

use DateTime;

/**
 * Class Thing
 */
final class Thing
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var DateTime
     */
    public $birthDate;

    /**
     * Gets the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the BirthDate.
     *
     * @return \DateTimeInterface
     */
    public function getBirthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * Sets the BirthDate.
     *
     * @param \DateTimeInterface $birthDate
     *
     * @return self
     */
    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }
}
