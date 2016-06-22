<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BiddingStrategyService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdxError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingErrors',
      'BiddingStrategyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingStrategyError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ConversionOptimizerBiddingScheme',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DoubleValue',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EnhancedCpcBiddingScheme',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ManualCpmBiddingScheme',
      'Money' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Money',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PageOnePromotedBiddingScheme',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetSpendBiddingScheme',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BudgetOptimizerBiddingScheme',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Selector',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingScheme',
      'SharedBiddingStrategy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SharedBiddingStrategy',
      'BiddingStrategyOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingStrategyOperation',
      'BiddingStrategyPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingStrategyPage',
      'BiddingStrategyReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingStrategyReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201605/BiddingStrategyService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of bidding strategies that match the selector.
     *
     * occurred while retrieving results.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201605\cm\BiddingStrategyPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Applies the list of mutate operations.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\BiddingStrategyOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\BiddingStrategyReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns a list of bidding strategies that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201605\cm\BiddingStrategyPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}