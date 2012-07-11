<?php
/**
 * Class file for XiFundHoldingsTypeGetLatestHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetLatestHoldingsResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetLatestHoldingsResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetLatestHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLFundHoldings
	 */
	public $GetLatestHoldingsResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFundHoldings GetLatestHoldingsResult
	 * @return XiFundHoldingsTypeGetLatestHoldingsResponse
	 */
	public function __construct($_GetLatestHoldingsResult = null)
	{
		parent::__construct(array('GetLatestHoldingsResult'=>$_GetLatestHoldingsResult));
	}
	/**
	 * Set GetLatestHoldingsResult
	 * @param OLFundHoldings GetLatestHoldingsResult
	 * @return OLFundHoldings
	 */
	public function setGetLatestHoldingsResult($_GetLatestHoldingsResult)
	{
		return ($this->GetLatestHoldingsResult = $_GetLatestHoldingsResult);
	}
	/**
	 * Get GetLatestHoldingsResult
	 * @return XiFundHoldingsTypeOLFundHoldings
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