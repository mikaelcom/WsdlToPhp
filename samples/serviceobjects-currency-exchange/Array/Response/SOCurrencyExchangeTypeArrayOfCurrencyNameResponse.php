<?php
/**
 * Class file for SOCurrencyExchangeTypeArrayOfCurrencyNameResponse
 * @date 08/07/2012
 */
/**
 * Class SOCurrencyExchangeTypeArrayOfCurrencyNameResponse
 * @date 08/07/2012
 */
class SOCurrencyExchangeTypeArrayOfCurrencyNameResponse extends SOCurrencyExchangeWsdlClass
{
	/**
	 * The CurrencyNameResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public $CurrencyNameResponse;
	/**
	 * Constructor
	 * @param SOCurrencyExchangeTypeCurrencyNameResponse CurrencyNameResponse
	 * @return SOCurrencyExchangeTypeArrayOfCurrencyNameResponse
	 */
	public function __construct($_CurrencyNameResponse = null)
	{
		parent::__construct(array('CurrencyNameResponse'=>$_CurrencyNameResponse));
	}
	/**
	 * Set CurrencyNameResponse
	 * @param CurrencyNameResponse CurrencyNameResponse
	 * @return CurrencyNameResponse
	 */
	public function setCurrencyNameResponse($_CurrencyNameResponse)
	{
		return ($this->CurrencyNameResponse = $_CurrencyNameResponse);
	}
	/**
	 * Get CurrencyNameResponse
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function getCurrencyNameResponse()
	{
		return $this->CurrencyNameResponse;
	}
	/**
	 * Returns the current element
	 * @see SOCurrencyExchangeWsdlClass::current()
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SOCurrencyExchangeWsdlClass::item()
	 * @param int
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::first()
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::last()
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SOCurrencyExchangeWsdlClass::offsetGet()
	 * @param int
	 * @return SOCurrencyExchangeTypeCurrencyNameResponse
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CurrencyNameResponse'
	 */
	public function getAttributeName()
	{
		return 'CurrencyNameResponse';
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