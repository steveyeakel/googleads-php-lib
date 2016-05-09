<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionTrackerOperation extends \Google\AdsApi\AdWords\v201603\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\cm\ConversionTracker $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201603\cm\ConversionTracker $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\cm\ConversionTracker
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\cm\ConversionTracker $operand
     * @return \Google\AdsApi\AdWords\v201603\cm\ConversionTrackerOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}