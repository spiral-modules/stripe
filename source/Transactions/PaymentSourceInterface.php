<?php

namespace Spiral\Transactions;

interface PaymentSourceInterface
{
    /**
     * Gateway internal card ID (if exists) - card should be stored in the payment gateway system.
     *
     * @return string|null
     */
    public function getGatewaySourceID();

    /**
     * Gateway internal customer ID (if exists) - customer should be stored in the payment gateway system.
     *
     * @return string|null
     */
    public function getGatewayCustomerID();

    /**
     * Card holder name (John Doe).
     *
     * @return string
     */
    public function getCardHolder(): string;

    /**
     * Card number.
     *
     * @return string
     */
    public function getCardNumber(): string;

    /**
     * Card expiration year (2017).
     *
     * @return int
     */
    public function getExpYear(): int;

    /**
     * Card expiration month (12).
     *
     * @return int
     */
    public function getExpMonth(): int;

    /**
     * Card security code (CVC).
     *
     * @return int
     */
    public function getSecurityCode(): int;

    /**
     * Card type (Maestro, Visa, AMEX, etc).
     *
     * @return string
     */
    //public function getCardType(): string;

    /**
     * Card number last digits (1234).
     *
     * @return string
     */
    //public function getNumberEnding(): string;
}