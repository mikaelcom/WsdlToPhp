<?php
/**
 * Class file for XiSecurityTypeGetMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetMarketCapitalizationResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeHistoricalMarketCapitalization
	 */
	public $GetMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeHistoricalMarketCapitalization GetMarketCapitalizationResult
	 * @return XiSecurityTypeGetMarketCapitalizationResponse
	 */
	public function __construct($_GetMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetMarketCapitalizationResult'=>$_GetMarketCapitalizationResult));
	}
	/**
	 * Set GetMarketCapitalizationResult
	 * @param HistoricalMarketCapitalization GetMarketCapitalizationResult
	 * @return HistoricalMarketCapitalization
	 */
	public function setGetMarketCapitalizationResult($_GetMarketCapitalizationResult)
	{
		return ($this->GetMarketCapitalizationResult = $_GetMarketCapitalizationResult);
	}
	/**
	 * Get GetMarketCapitalizationResult
	 * @return XiSecurityTypeHistoricalMarketCapitalization
	 */
	public function getGetMarketCapitalizationResult()
	{
		return $this->GetMarketCapitalizationResult;
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