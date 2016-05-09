<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExperimentReturnValue extends \Google\AdsApi\AdWords\v201603\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\cm\Experiment[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201603\cm\Experiment[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\cm\Experiment[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\cm\Experiment[] $value
     * @return \Google\AdsApi\AdWords\v201603\cm\ExperimentReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}