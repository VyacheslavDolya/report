<?php

namespace Report\Model;


class TransactionModel implements TransactionModelInterface
{

    protected $merchant;
    protected $mid;
    protected $bank;
    protected $institution;
    protected $gate;
    protected $currency;
    protected $cardType;
    protected $date;
    protected $transactionType;
    protected $transactionStatus;
    protected $bin;
    protected $country;
    protected $zip;
    protected $city;
    protected $hasCvv;
    protected $affilateId;
    protected $productId;
    protected $webSite;

    public function __construct(
        $merchant,
        $mid,
        $bank,
        $institution,
        $gate,
        $currency,
        $cardType,
        $date,
        $transactionType,
        $transactionStatus,
        $bin,
        $country,
        $zip,
        $city,
        $hasCvv,
        $affilateId,
        $productId,
        $webSite
    ) {
        $this->merchant = $merchant;
        $this->mid = $mid;
        $this->bank = $bank;
        $this->institution = $institution;
        $this->gate = $gate;
        $this->currency = $currency;
        $this->cardType = $cardType;
        $this->date = $date;
        $this->transactionType = $transactionType;
        $this->transactionStatus =$transactionStatus;
        $this->bin = $bin;
        $this->country = $country;
        $this->zip = $zip;
        $this->city = $city;
        $this->hasCvv = $hasCvv;
        $this->affilateId = $affilateId;
        $this->productId = $productId;
        $this->webSite = $webSite;
    }

    /**
     * @return string
     */
    public function getMerchant()
    {

    }

    /**
     * @return int
     */
    public function getMid()
    {

    }

    /**
     * @return string
     */
    public function getBank()
    {

    }

    /**
     * @return string
     */
    public function getInstitution()
    {

    }

    /**
     * @return string
     */
    public function getGate()
    {

    }

    /**
     * @return HardcodedCurrencyRepository
     */
    public function getCurrency()
    {

    }

    /**
     * @return TransactionType
     */
    public function getCardType()
    {

    }

    /**
     * @return int
     */
    public function getDate()
    {

    }

    /**
     * @return string
     */
    public function getTransactionType()
    {

    }

    /**
     * @return TransactionStatus
     */
    public function getTransactionStatus()
    {

    }

    /**
     * @return int
     */
    public function getBin()
    {

    }

    /**
     * @return HardcodedCountryRepository
     */
    public function getCountry()
    {

    }

    /**
     * @return string
     */
    public function getZip()
    {

    }

    /**
     * @return string
     */
    public function getCity()
    {

    }

    /**
     * @return bool
     */
    public function getHasCvv()
    {

    }

    /**
     * @return string
     */
    public function getAffilateId()
    {

    }

    /**
     * @return string
     */
    public function getProductId()
    {

    }

    /**
     * @return string
     */
    public function getWebSite()
    {

    }
}