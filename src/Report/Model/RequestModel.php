<?php

namespace Report\Model;

use Report\Model\MeasuresModelInterface;
use Report\Model\ColumnsModelInterface;
use Report\Model\RowsModelInterface;
use Report\Model\DimensionsModelInterface;

class RequestModel implements  RequestModelInterface
{
    protected $measures;
    protected $dimensions;
    protected $columns;
    protected $rows;

    public function __construct(
        MeasuresModelInterface $measures,
        DimensionsModelInterface $dimensions,
        ColumnsModelInterface $columns,
        RowsModelInterface $rows
    ) {
        $this->measures     = $measures->get();
        $this->dimensions   = $dimensions->get();
        $this->columns      = $columns->get();
        $this->rows         = $rows->get();
    }

    /**
     * getMeasures
     *
     * @return string[]
     */
    public function getMeasures()
    {
        return $this->measures;
    }

    /**
     * getDimensions
     *
     * @return string[]
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * getColumns
     *
     * @return string[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * getRows
     *
     * @return string[]
     */
    public function getRows()
    {
        return $this->rows;
    }
}