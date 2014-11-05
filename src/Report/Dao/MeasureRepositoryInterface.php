<?php

namespace Report\Dao;

interface MeasureRepositoryInterface
{

    /**
     * getMeasureList
     *
     * @return string[]
     */
    public function getMeasureList();

    /**
     * getDimensionList
     *
     * @return string[]
     */
    public function getDimensionList();

    /**
     * getColumnList
     *
     * @return string[]
     */
    public function getColumnList();

    /**
     * getRowList
     *
     * @return string[]
     */
    public function getRowList();
}