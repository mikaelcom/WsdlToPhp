<?php
/**
 * Class file for XiFundHoldingsTypeGetTopHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetTopHoldingsResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetTopHoldingsResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetTopHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLFundHoldings
	 */
	public $GetTopHoldingsResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFundHoldings GetTopHoldingsResult
	 * @return XiFundHoldingsTypeGetTopHoldingsResponse
	 */
	public function __construct($_GetTopHoldingsResult = null)
	{
		parent::__construct(array('GetTopHoldingsResult'=>$_GetTopHoldingsResult));
	}
	/**
	 * Set GetTopHoldingsResult
	 * @param OLFundHoldings GetTopHoldingsResult
	 * @return OLFundHoldings
	 */
	public function setGetTopHoldingsResult($_GetTopHoldingsResult)
	{
		return ($this->GetTopHoldingsResult = $_GetTopHoldingsResult);
	}
	/**
	 * Get GetTopHoldingsResult
	 * @return XiFundHoldingsTypeOLFundHoldings
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