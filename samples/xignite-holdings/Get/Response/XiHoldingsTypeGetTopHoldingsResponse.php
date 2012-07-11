<?php
/**
 * Class file for XiHoldingsTypeGetTopHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetTopHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetTopHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetTopHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManagerHoldings
	 */
	public $GetTopHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManagerHoldings GetTopHoldingsResult
	 * @return XiHoldingsTypeGetTopHoldingsResponse
	 */
	public function __construct($_GetTopHoldingsResult = null)
	{
		parent::__construct(array('GetTopHoldingsResult'=>$_GetTopHoldingsResult));
	}
	/**
	 * Set GetTopHoldingsResult
	 * @param ManagerHoldings GetTopHoldingsResult
	 * @return ManagerHoldings
	 */
	public function setGetTopHoldingsResult($_GetTopHoldingsResult)
	{
		return ($this->GetTopHoldingsResult = $_GetTopHoldingsResult);
	}
	/**
	 * Get GetTopHoldingsResult
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function getGetTopHoldingsResult()
	{
		return $this->GetTopHoldingsResult;
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