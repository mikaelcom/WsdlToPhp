<?php
/**
 * Class file for XiRatesTypeSearchRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeSearchRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeSearchRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The SearchRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateDescription
	 */
	public $SearchRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfRateDescription SearchRatesResult
	 * @return XiRatesTypeSearchRatesResponse
	 */
	public function __construct($_SearchRatesResult = null)
	{
		parent::__construct(array('SearchRatesResult'=>new XiRatesTypeArrayOfRateDescription($_SearchRatesResult)));
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
	 * @return XiRatesTypeArrayOfRateDescription
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