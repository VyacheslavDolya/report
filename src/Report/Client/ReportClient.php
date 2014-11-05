<?php

namespace Report\Client;

use Report\Model\ResponseModel;
use Report\Model\ResponseModelInterface;
use Report\Model\RequestModelInterface;

class ReportClient implements ReportClientInterface
{

    /**
     * @param RequestModelInterface $requestModel
     * @return ResponseModelInterface
     */
    public function getTransactions(RequestModelInterface $requestModel)
    {
        return new ResponseModel();
    }
}