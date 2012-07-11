<?php
/**
 * Class file for XiRealTimeTypeSearchByMarketCapResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeSearchByMarketCapResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeSearchByMarketCapResponse extends XiRealTimeWsdlClass
{
	/**
	 * The SearchByMarketCapResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeArrayOfSearchResult
	 */
	public $SearchByMarketCapResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeArrayOfSearchResult SearchByMarketCapResult
	 * @return XiRealTimeTypeSearchByMarketCapResponse
	 */
	public function __construct($_SearchByMarketCapResult = null)
	{
		parent::__construct(array('SearchByMarketCapResult'=>new XiRealTimeTypeArrayOfSearchResult($_SearchByMarketCapResult)));
	}
	/**
	 * Set SearchByMarketCapResult
	 * @param ArrayOfSearchResult SearchByMarketCapResult
	 * @return ArrayOfSearchResult
	 */
	public function setSearchByMarketCapResult($_SearchByMarketCapResult)
	{
		return ($this->SearchByMarketCapResult = $_SearchByMarketCapResult);
	}
	/**
	 * Get SearchByMarketCapResult
	 * @return XiRealTimeTypeArrayOfSearchResult
	 */
	public function getSearchByMarketCapResult()
	{
		return $this->SearchByMarketCapResult;
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