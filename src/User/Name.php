<?php
declare(strict_types=1);

namespace App\User;

use Cycle\Annotated\Annotation\Embeddable;
use Cycle\Annotated\Annotation\Column;

/** @Embeddable */
class Name {

    /**
     * @Column(type="string", nullable=true)
     */
    private string $firstname = '';

    /**
     * @Column(type="string", nullable=true)
     */
    private string $middle = '';

    /**
     * @Column(type="string", nullable=true)
     */
    private string  $lastname = '';

    private string $non_mapped_private_field = '';

    public function __construct($firstname = '', $middle = '', $lastname = '')
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->middle = $middle;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getMiddle(): string
    {
        return $this->middle;
    }

    /**
     * @param string $middle
     */
    public function setMiddle(string $middle): void
    {
        $this->middle = $middle;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
}
