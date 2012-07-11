<?php
/**
 * Class file for XiCurrenciesTypeConvertHistoricalValueResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeConvertHistoricalValueResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeConvertHistoricalValueResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The ConvertHistoricalValueResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeExchangeConversion
	 */
	public $ConvertHistoricalValueResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeExchangeConversion ConvertHistoricalValueResult
	 * @return XiCurrenciesTypeConvertHistoricalValueResponse
	 */
	public function __construct($_ConvertHistoricalValueResult = null)
	{
		parent::__construct(array('ConvertHistoricalValueResult'=>$_ConvertHistoricalValueResult));
	}
	/**
	 * Set ConvertHistoricalValueResult
	 * @param ExchangeConversion ConvertHistoricalValueResult
	 * @return ExchangeConversion
	 */
	public function setConvertHistoricalValueResult($_ConvertHistoricalValueResult)
	{
		return ($this->ConvertHistoricalValueResult = $_ConvertHistoricalValueResult);
	}
	/**
	 * Get ConvertHistoricalValueResult
	 * @return XiCurrenciesTypeExchangeConversion
	 */
	public function getConvertHistoricalValueResult()
	{
		return $this->ConvertHistoricalValueResult;
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