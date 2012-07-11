<?php
/**
 * Class file for XiRatesTypeGetRateSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateSymbolResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateSymbolResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateSymbol
	 */
	public $GetRateSymbolResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateSymbol GetRateSymbolResult
	 * @return XiRatesTypeGetRateSymbolResponse
	 */
	public function __construct($_GetRateSymbolResult = null)
	{
		parent::__construct(array('GetRateSymbolResult'=>$_GetRateSymbolResult));
	}
	/**
	 * Set GetRateSymbolResult
	 * @param RateSymbol GetRateSymbolResult
	 * @return RateSymbol
	 */
	public function setGetRateSymbolResult($_GetRateSymbolResult)
	{
		return ($this->GetRateSymbolResult = $_GetRateSymbolResult);
	}
	/**
	 * Get GetRateSymbolResult
	 * @return XiRatesTypeRateSymbol
	 */
	public function getGetRateSymbolResult()
	{
		return $this->GetRateSymbolResult;
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