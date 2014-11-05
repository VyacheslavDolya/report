<?php

namespace Report\Model;

interface TransactionModelInterface {

    /**
     * @return string
     */
    public function getMerchant();

    /**
     * @return int
     */
    public function getMid();

    /**
     * @return string
     */
    public function getBank();

    /**
     * @return string
     */
    public function getInstitution();

    /**
     * @return string
     */
    public function getGate();

    /**
     * @return HardcodedCurrencyRepository
     */
    public function getCurrency();

    /**
     * @return TransactionType
     */
    public function getCardType();

    /**
     * @return int
     */
    public function getDate();

    /**
     * @return string
     */
    public function getTransactionType();

    /**
     * @return TransactionStatus
     */
    public function getTransactionStatus();

    /**
     * @return int
     */
    public function getBin();

    /**
     * @return HardcodedCountryRepository
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getZip();

    /**
     * @return string
     */
    public function getCity();

    /**
     * @return bool
     */
    public function getHasCvv();

    /**
     * @return string
     */
    public function getAffilateId();

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return string
     */
    public function getWebSite();
}