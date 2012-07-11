<?php
/**
 * Class file for XiInterBanksTypeSearchRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeSearchRatesResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeSearchRatesResponse extends XiInterBanksWsdlClass
{
	/**
	 * The SearchRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfRateDescription
	 */
	public $SearchRatesResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeArrayOfRateDescription SearchRatesResult
	 * @return XiInterBanksTypeSearchRatesResponse
	 */
	public function __construct($_SearchRatesResult = null)
	{
		parent::__construct(array('SearchRatesResult'=>new XiInterBanksTypeArrayOfRateDescription($_SearchRatesResult)));
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
	 * @return XiInterBanksTypeArrayOfRateDescription
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