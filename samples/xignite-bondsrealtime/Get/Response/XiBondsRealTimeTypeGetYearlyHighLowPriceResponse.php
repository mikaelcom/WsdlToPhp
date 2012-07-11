<?php
/**
 * Class file for XiBondsRealTimeTypeGetYearlyHighLowPriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetYearlyHighLowPriceResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetYearlyHighLowPriceResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetYearlyHighLowPriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public $GetYearlyHighLowPriceResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeYearlyHighLowPrice GetYearlyHighLowPriceResult
	 * @return XiBondsRealTimeTypeGetYearlyHighLowPriceResponse
	 */
	public function __construct($_GetYearlyHighLowPriceResult = null)
	{
		parent::__construct(array('GetYearlyHighLowPriceResult'=>$_GetYearlyHighLowPriceResult));
	}
	/**
	 * Set GetYearlyHighLowPriceResult
	 * @param YearlyHighLowPrice GetYearlyHighLowPriceResult
	 * @return YearlyHighLowPrice
	 */
	public function setGetYearlyHighLowPriceResult($_GetYearlyHighLowPriceResult)
	{
		return ($this->GetYearlyHighLowPriceResult = $_GetYearlyHighLowPriceResult);
	}
	/**
	 * Get GetYearlyHighLowPriceResult
	 * @return XiBondsRealTimeTypeYearlyHighLowPrice
	 */
	public function getGetYearlyHighLowPriceResult()
	{
		return $this->GetYearlyHighLowPriceResult;
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