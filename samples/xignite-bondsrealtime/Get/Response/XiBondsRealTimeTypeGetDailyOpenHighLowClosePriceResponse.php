<?php
/**
 * Class file for XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetDailyOpenHighLowClosePriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public $GetDailyOpenHighLowClosePriceResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePriceResult
	 * @return XiBondsRealTimeTypeGetDailyOpenHighLowClosePriceResponse
	 */
	public function __construct($_GetDailyOpenHighLowClosePriceResult = null)
	{
		parent::__construct(array('GetDailyOpenHighLowClosePriceResult'=>$_GetDailyOpenHighLowClosePriceResult));
	}
	/**
	 * Set GetDailyOpenHighLowClosePriceResult
	 * @param DailyOpenHighLowClosePrice GetDailyOpenHighLowClosePriceResult
	 * @return DailyOpenHighLowClosePrice
	 */
	public function setGetDailyOpenHighLowClosePriceResult($_GetDailyOpenHighLowClosePriceResult)
	{
		return ($this->GetDailyOpenHighLowClosePriceResult = $_GetDailyOpenHighLowClosePriceResult);
	}
	/**
	 * Get GetDailyOpenHighLowClosePriceResult
	 * @return XiBondsRealTimeTypeDailyOpenHighLowClosePrice
	 */
	public function getGetDailyOpenHighLowClosePriceResult()
	{
		return $this->GetDailyOpenHighLowClosePriceResult;
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