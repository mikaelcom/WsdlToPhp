<?php
/**
 * Class file for XiCalendarTypeListCountryCodesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeListCountryCodesResponse
 * @date 08/07/2012
 */
class XiCalendarTypeListCountryCodesResponse extends XiCalendarWsdlClass
{
	/**
	 * The ListCountryCodesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeCountryCodes
	 */
	public $ListCountryCodesResult;
	/**
	 * Constructor
	 * @param XiCalendarTypeCountryCodes ListCountryCodesResult
	 * @return XiCalendarTypeListCountryCodesResponse
	 */
	public function __construct($_ListCountryCodesResult = null)
	{
		parent::__construct(array('ListCountryCodesResult'=>$_ListCountryCodesResult));
	}
	/**
	 * Set ListCountryCodesResult
	 * @param CountryCodes ListCountryCodesResult
	 * @return CountryCodes
	 */
	public function setListCountryCodesResult($_ListCountryCodesResult)
	{
		return ($this->ListCountryCodesResult = $_ListCountryCodesResult);
	}
	/**
	 * Get ListCountryCodesResult
	 * @return XiCalendarTypeCountryCodes
	 */
	public function getListCountryCodesResult()
	{
		return $this->ListCountryCodesResult;
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