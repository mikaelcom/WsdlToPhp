<?php
/**
 * Class file for XiMoneyMarketsTypeSearchRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeSearchRatesResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeSearchRatesResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The SearchRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfRateDescription
	 */
	public $SearchRatesResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfRateDescription SearchRatesResult
	 * @return XiMoneyMarketsTypeSearchRatesResponse
	 */
	public function __construct($_SearchRatesResult = null)
	{
		parent::__construct(array('SearchRatesResult'=>new XiMoneyMarketsTypeArrayOfRateDescription($_SearchRatesResult)));
	}
	/**
	 * Set SearchRatesResult
	 * @param ArrayOfRateDescription SearchRatesResult
	 * @return ArrayOfRateDescription
	 */
	public function setSearchRatesResult($_SearchRatesResult)
	{
		return ($this->SearchRatesResult = $_SearchRatesResult);
	}
	/**
	 * Get SearchRatesResult
	 * @return XiMoneyMarketsTypeArrayOfRateDescription
	 */
	public function getSearchRatesResult()
	{
		return $this->SearchRatesResult;
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