<?php
/**
 * Class file for XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetHistoricalMarketCapitalizationCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeHistoricalMarketCapitalization
	 */
	public $GetHistoricalMarketCapitalizationCustomResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeHistoricalMarketCapitalization GetHistoricalMarketCapitalizationCustomResult
	 * @return XiSecurityTypeGetHistoricalMarketCapitalizationCustomResponse
	 */
	public function __construct($_GetHistoricalMarketCapitalizationCustomResult = null)
	{
		parent::__construct(array('GetHistoricalMarketCapitalizationCustomResult'=>$_GetHistoricalMarketCapitalizationCustomResult));
	}
	/**
	 * Set GetHistoricalMarketCapitalizationCustomResult
	 * @param HistoricalMarketCapitalization GetHistoricalMarketCapitalizationCustomResult
	 * @return HistoricalMarketCapitalization
	 */
	public function setGetHistoricalMarketCapitalizationCustomResult($_GetHistoricalMarketCapitalizationCustomResult)
	{
		return ($this->GetHistoricalMarketCapitalizationCustomResult = $_GetHistoricalMarketCapitalizationCustomResult);
	}
	/**
	 * Get GetHistoricalMarketCapitalizationCustomResult
	 * @return XiSecurityTypeHistoricalMarketCapitalization
	 */
	public function getGetHistoricalMarketCapitalizationCustomResult()
	{
		return $this->GetHistoricalMarketCapitalizationCustomResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>