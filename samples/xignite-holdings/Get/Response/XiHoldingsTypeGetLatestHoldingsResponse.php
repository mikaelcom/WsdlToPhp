<?php
/**
 * Class file for XiHoldingsTypeGetLatestHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetLatestHoldingsResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeGetLatestHoldingsResponse extends XiHoldingsWsdlClass
{
	/**
	 * The GetLatestHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManagerHoldings
	 */
	public $GetLatestHoldingsResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManagerHoldings GetLatestHoldingsResult
	 * @return XiHoldingsTypeGetLatestHoldingsResponse
	 */
	public function __construct($_GetLatestHoldingsResult = null)
	{
		parent::__construct(array('GetLatestHoldingsResult'=>$_GetLatestHoldingsResult));
	}
	/**
	 * Set GetLatestHoldingsResult
	 * @param ManagerHoldings GetLatestHoldingsResult
	 * @return ManagerHoldings
	 */
	public function setGetLatestHoldingsResult($_GetLatestHoldingsResult)
	{
		return ($this->GetLatestHoldingsResult = $_GetLatestHoldingsResult);
	}
	/**
	 * Get GetLatestHoldingsResult
	 * @return XiHoldingsTypeManagerHoldings
	 */
	public function getGetLatestHoldingsResult()
	{
		return $this->GetLatestHoldingsResult;
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