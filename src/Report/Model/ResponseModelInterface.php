<?php

namespace Report\Model;

interface ResponseModelInterface {

    /**
     * Get transactionList
     *
     * @return TransactionModelInterface[]
     */
    public function getTransactionList();
}