<?php
/**
 * Class file for XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetDailyOpenHighLowClosePricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice
	 */
	public $GetDailyOpenHighLowClosePricesResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePricesResult
	 * @return XiBondsRealTimeTypeGetDailyOpenHighLowClosePricesResponse
	 */
	public function __construct($_GetDailyOpenHighLowClosePricesResult = null)
	{
		parent::__construct(array('GetDailyOpenHighLowClosePricesResult'=>new XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice($_GetDailyOpenHighLowClosePricesResult)));
	}
	/**
	 * Set GetDailyOpenHighLowClosePricesResult
	 * @param ArrayOfDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePricesResult
	 * @return ArrayOfDailyOpenHighLowClosePrice
	 */
	public function setGetDailyOpenHighLowClosePricesResult($_GetDailyOpenHighLowClosePricesResult)
	{
		return ($this->GetDailyOpenHighLowClosePricesResult = $_GetDailyOpenHighLowClosePricesResult);
	}
	/**
	 * Get GetDailyOpenHighLowClosePricesResult
	 * @return XiBondsRealTimeTypeArrayOfDailyOpenHighLowClosePrice
	 */
	public function getGetDailyOpenHighLowClosePricesResult()
	{
		return $this->GetDailyOpenHighLowClosePricesResult;
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