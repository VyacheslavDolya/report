<?php

namespace Report\Model;

use Report\Model\TransactionModelInterface;
use Report\Model\TransactionModel;


class ResponseModel implements ResponseModelInterface
{
    /**
     * Get transactionList
     *
     * @return TransactionModelInterface[]
     */
    public function getTransactionList()
    {
        $merchant = 'asdsadsa';
        $mid = 'asdsadsa';
        $bank = 'asdsadsa';
        $institution = 'asdsadsa';
        $gate = 'asdsadsa';
        $currency = 'asdsadsa';
        $cardType = 'asdsadsa';
        $date = 'asdsadsa';
        $transactionType = 'asdsadsa';
        $transactionStatus = 'asdsadsa';
        $bin = 'asdsadsa';
        $country = 'asdsadsa';
        $zip = 'asdsadsa';
        $city = 'asdsadsa';
        $hasCvv = 'asdsadsa';
        $affilateId = 'asdsadsa';
        $productId = 'asdsadsa';
        $webSite = 'sdfsdafsd';

        return [new TransactionModel(
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
        )];
    }
}