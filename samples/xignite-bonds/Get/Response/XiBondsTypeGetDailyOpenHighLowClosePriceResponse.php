<?php
/**
 * Class file for XiBondsTypeGetDailyOpenHighLowClosePriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetDailyOpenHighLowClosePriceResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetDailyOpenHighLowClosePriceResponse extends XiBondsWsdlClass
{
	/**
	 * The GetDailyOpenHighLowClosePriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeDailyOpenHighLowClosePrice
	 */
	public $GetDailyOpenHighLowClosePriceResult;
	/**
	 * Constructor
	 * @param XiBondsTypeDailyOpenHighLowClosePrice GetDailyOpenHighLowClosePriceResult
	 * @return XiBondsTypeGetDailyOpenHighLowClosePriceResponse
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
	 * @return XiBondsTypeDailyOpenHighLowClosePrice
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