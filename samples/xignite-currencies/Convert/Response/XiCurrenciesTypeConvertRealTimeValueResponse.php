<?php
/**
 * Class file for XiCurrenciesTypeConvertRealTimeValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeConvertRealTimeValueResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeConvertRealTimeValueResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The ConvertRealTimeValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeExchangeConversion
	 */
	public $ConvertRealTimeValueResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeExchangeConversion ConvertRealTimeValueResult
	 * @return XiCurrenciesTypeConvertRealTimeValueResponse
	 */
	public function __construct($_ConvertRealTimeValueResult = null)
	{
		parent::__construct(array('ConvertRealTimeValueResult'=>$_ConvertRealTimeValueResult));
	}
	/**
	 * Set ConvertRealTimeValueResult
	 * @param ExchangeConversion ConvertRealTimeValueResult
	 * @return ExchangeConversion
	 */
	public function setConvertRealTimeValueResult($_ConvertRealTimeValueResult)
	{
		return ($this->ConvertRealTimeValueResult = $_ConvertRealTimeValueResult);
	}
	/**
	 * Get ConvertRealTimeValueResult
	 * @return XiCurrenciesTypeExchangeConversion
	 */
	public function getConvertRealTimeValueResult()
	{
		return $this->ConvertRealTimeValueResult;
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