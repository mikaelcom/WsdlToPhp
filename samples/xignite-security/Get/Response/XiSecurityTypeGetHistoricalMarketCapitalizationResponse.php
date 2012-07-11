<?php
/**
 * Class file for XiSecurityTypeGetHistoricalMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetHistoricalMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetHistoricalMarketCapitalizationResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetHistoricalMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeHistoricalMarketCapitalization
	 */
	public $GetHistoricalMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeHistoricalMarketCapitalization GetHistoricalMarketCapitalizationResult
	 * @return XiSecurityTypeGetHistoricalMarketCapitalizationResponse
	 */
	public function __construct($_GetHistoricalMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetHistoricalMarketCapitalizationResult'=>$_GetHistoricalMarketCapitalizationResult));
	}
	/**
	 * Set GetHistoricalMarketCapitalizationResult
	 * @param HistoricalMarketCapitalization GetHistoricalMarketCapitalizationResult
	 * @return HistoricalMarketCapitalization
	 */
	public function setGetHistoricalMarketCapitalizationResult($_GetHistoricalMarketCapitalizationResult)
	{
		return ($this->GetHistoricalMarketCapitalizationResult = $_GetHistoricalMarketCapitalizationResult);
	}
	/**
	 * Get GetHistoricalMarketCapitalizationResult
	 * @return XiSecurityTypeHistoricalMarketCapitalization
	 */
	public function getGetHistoricalMarketCapitalizationResult()
	{
		return $this->GetHistoricalMarketCapitalizationResult;
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