<?php
/**
 * Class file for XiNewsTypeGetMarketNewsDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetMarketNewsDetailsResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetMarketNewsDetailsResponse extends XiNewsWsdlClass
{
	/**
	 * The GetMarketNewsDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeMarketNewsItem
	 */
	public $GetMarketNewsDetailsResult;
	/**
	 * Constructor
	 * @param XiNewsTypeMarketNewsItem GetMarketNewsDetailsResult
	 * @return XiNewsTypeGetMarketNewsDetailsResponse
	 */
	public function __construct($_GetMarketNewsDetailsResult = null)
	{
		parent::__construct(array('GetMarketNewsDetailsResult'=>$_GetMarketNewsDetailsResult));
	}
	/**
	 * Set GetMarketNewsDetailsResult
	 * @param MarketNewsItem GetMarketNewsDetailsResult
	 * @return MarketNewsItem
	 */
	public function setGetMarketNewsDetailsResult($_GetMarketNewsDetailsResult)
	{
		return ($this->GetMarketNewsDetailsResult = $_GetMarketNewsDetailsResult);
	}
	/**
	 * Get GetMarketNewsDetailsResult
	 * @return XiNewsTypeMarketNewsItem
	 */
	public function getGetMarketNewsDetailsResult()
	{
		return $this->GetMarketNewsDetailsResult;
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