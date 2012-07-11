<?php
/**
 * Class file for XiHoldingsTypeGetFivePercentHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetFivePercentHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetFivePercentHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetFivePercentHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeFivePercentHoldings
	 */
	public $GetFivePercentHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeFivePercentHoldings GetFivePercentHoldingsResult
	 * @return XiHoldingsTypeGetFivePercentHoldingsResponse
	 */
	public function __construct($_GetFivePercentHoldingsResult = null)
	{
		parent::__construct(array('GetFivePercentHoldingsResult'=>$_GetFivePercentHoldingsResult));
	}
	/**
	 * Set GetFivePercentHoldingsResult
	 * @param FivePercentHoldings GetFivePercentHoldingsResult
	 * @return FivePercentHoldings
	 */
	public function setGetFivePercentHoldingsResult($_GetFivePercentHoldingsResult)
	{
		return ($this->GetFivePercentHoldingsResult = $_GetFivePercentHoldingsResult);
	}
	/**
	 * Get GetFivePercentHoldingsResult
	 * @return XiHoldingsTypeFivePercentHoldings
	 */
	public function getGetFivePercentHoldingsResult()
	{
		return $this->GetFivePercentHoldingsResult;
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