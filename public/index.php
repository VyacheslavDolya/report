<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
ini_set('html_errors', 1);

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Report\Client\ReportClient;
use Report\Model\RequestModel;
use Report\Model\MeasuresModel;
use Report\Model\ColumnsModel;
use Report\Model\RowsModel;
use Report\Model\DimensionsModel;


$client = new ReportClient();
$measures = new MeasuresModel();
$dimensions = new DimensionsModel();
$columns = new ColumnsModel();
$rows = new RowsModel();

$model = new RequestModel($measures, $dimensions, $columns, $rows);
$transactions = $client->getTransactions($model);

var_dump($transactions->getTransactionList());

