<?php
/**
 * Class file for XiNewsTypeGetReutersMarketNewsDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetReutersMarketNewsDetailsResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetReutersMarketNewsDetailsResponse extends XiNewsWsdlClass
{
	/**
	 * The GetReutersMarketNewsDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeMarketNewsItem
	 */
	public $GetReutersMarketNewsDetailsResult;
	/**
	 * Constructor
	 * @param XiNewsTypeMarketNewsItem GetReutersMarketNewsDetailsResult
	 * @return XiNewsTypeGetReutersMarketNewsDetailsResponse
	 */
	public function __construct($_GetReutersMarketNewsDetailsResult = null)
	{
		parent::__construct(array('GetReutersMarketNewsDetailsResult'=>$_GetReutersMarketNewsDetailsResult));
	}
	/**
	 * Set GetReutersMarketNewsDetailsResult
	 * @param MarketNewsItem GetReutersMarketNewsDetailsResult
	 * @return MarketNewsItem
	 */
	public function setGetReutersMarketNewsDetailsResult($_GetReutersMarketNewsDetailsResult)
	{
		return ($this->GetReutersMarketNewsDetailsResult = $_GetReutersMarketNewsDetailsResult);
	}
	/**
	 * Get GetReutersMarketNewsDetailsResult
	 * @return XiNewsTypeMarketNewsItem
	 */
	public function getGetReutersMarketNewsDetailsResult()
	{
		return $this->GetReutersMarketNewsDetailsResult;
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