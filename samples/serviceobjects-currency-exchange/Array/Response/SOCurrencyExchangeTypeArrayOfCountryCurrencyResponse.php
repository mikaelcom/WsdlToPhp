<?php
/**
 * Class file for SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The CountryCurrencyResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public $CountryCurrencyResponse;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeCountryCurrencyResponse CountryCurrencyResponse
	 * @return SOCurrencyExchangeTypeArrayOfCountryCurrencyResponse
	 */
	public function __construct($_CountryCurrencyResponse = null)
	{
		parent::__construct(array('CountryCurrencyResponse'=>$_CountryCurrencyResponse));
	}
	/**
	 * Set CountryCurrencyResponse
	 * @param CountryCurrencyResponse CountryCurrencyResponse
	 * @return CountryCurrencyResponse
	 */
	public function setCountryCurrencyResponse($_CountryCurrencyResponse)
	{
		return ($this->CountryCurrencyResponse = $_CountryCurrencyResponse);
	}
	/**
	 * Get CountryCurrencyResponse
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function getCountryCurrencyResponse()
	{
		return $this->CountryCurrencyResponse;
	}
	/**
	 * Returns the current element
	 * @see SOCurrencyExchangeWsdlClass::current()
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOCurrencyExchangeWsdlClass::item()
	 * @param int
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::first()
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::last()
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::offsetGet()
	 * @param int
	 * @return SOCurrencyExchangeTypeCountryCurrencyResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CountryCurrencyResponse'
	 */
	public function getAttributeName()
	{
		return 'CountryCurrencyResponse';
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