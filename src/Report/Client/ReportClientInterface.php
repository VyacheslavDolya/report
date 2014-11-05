<?php

namespace Report\Client;

use Report\Model\ResponseModelInterface;
use Report\Model\RequestModelInterface;

interface ReportClientInterface {

    /**
     * @param RequestModelInterface $requestModel
     * @return ResponseModelInterface
     */
    public function getTransactions(RequestModelInterface $requestModel);
}