<?php
/**
 * Class file for XiRatesTypeGetRateFromSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateFromSymbolResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateFromSymbolResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateFromSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateSymbol
	 */
	public $GetRateFromSymbolResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateSymbol GetRateFromSymbolResult
	 * @return XiRatesTypeGetRateFromSymbolResponse
	 */
	public function __construct($_GetRateFromSymbolResult = null)
	{
		parent::__construct(array('GetRateFromSymbolResult'=>$_GetRateFromSymbolResult));
	}
	/**
	 * Set GetRateFromSymbolResult
	 * @param RateSymbol GetRateFromSymbolResult
	 * @return RateSymbol
	 */
	public function setGetRateFromSymbolResult($_GetRateFromSymbolResult)
	{
		return ($this->GetRateFromSymbolResult = $_GetRateFromSymbolResult);
	}
	/**
	 * Get GetRateFromSymbolResult
	 * @return XiRatesTypeRateSymbol
	 */
	public function getGetRateFromSymbolResult()
	{
		return $this->GetRateFromSymbolResult;
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