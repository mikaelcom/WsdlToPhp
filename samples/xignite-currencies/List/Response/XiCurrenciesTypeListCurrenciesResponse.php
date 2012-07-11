<?php
/**
 * Class file for XiCurrenciesTypeListCurrenciesResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeListCurrenciesResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeListCurrenciesResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The ListCurrenciesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencyList
	 */
	public $ListCurrenciesResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencyList ListCurrenciesResult
	 * @return XiCurrenciesTypeListCurrenciesResponse
	 */
	public function __construct($_ListCurrenciesResult = null)
	{
		parent::__construct(array('ListCurrenciesResult'=>$_ListCurrenciesResult));
	}
	/**
	 * Set ListCurrenciesResult
	 * @param CurrencyList ListCurrenciesResult
	 * @return CurrencyList
	 */
	public function setListCurrenciesResult($_ListCurrenciesResult)
	{
		return ($this->ListCurrenciesResult = $_ListCurrenciesResult);
	}
	/**
	 * Get ListCurrenciesResult
	 * @return XiCurrenciesTypeCurrencyList
	 */
	public function getListCurrenciesResult()
	{
		return $this->ListCurrenciesResult;
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