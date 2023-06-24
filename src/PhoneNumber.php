<?php

namespace Alphaolomi\TzPhoneNumber;

class PhoneNumber
{
    /**
     * @var string|number|PhoneNumber
     */
    private $phoneNumber;

    public function __construct(string|int|PhoneNumber $phoneNumber)
    {
        // Check if the phone number is an instance of PhoneNumber
        if ($phoneNumber instanceof PhoneNumber) {
            $phoneNumber = $phoneNumber->getPhoneNumber();
        }

        // Check if the phone number is a string or an integer
        if (!is_string($phoneNumber) && !is_int($phoneNumber)) {
            throw new \InvalidArgumentException('Phone number must be a string or an integer');
        }

        // Check if the phone number is an integer and convert it to a string
        if (is_int($phoneNumber)) {
            $phoneNumber = (string) '0' . $phoneNumber;
        }

        // Check if the phone number is a string and it contains only digits
        if (strlen($phoneNumber) < 10) {
            throw new \InvalidArgumentException('Phone number must be at least 10 digits');
        }

        // Check if the phone number is a string and it contains only digits
        if (strlen($phoneNumber) > 13) {
            throw new \InvalidArgumentException('Phone number must not be more than 13 digits');
        }

        // Check if the phone number is a string and it contains only digits
        if (strlen($phoneNumber) === 10) {
            // remove the leading zero with the country code
            $phoneNumber = '255' . substr($phoneNumber, 1);
        }

        // Check if the phone number is a string and it contains only digits
        if (strlen($phoneNumber) === 12) {
            // remove the leading zero with the country code
            $phoneNumber = '255' . substr($phoneNumber, 2);
        }

        // Only accept phone numbers that start with 255 or 0
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Get the Country Code of the phone number
     */
    public function getCountryCode(): string
    {
        return substr($this->phoneNumber, 0, 3);
    }
}
