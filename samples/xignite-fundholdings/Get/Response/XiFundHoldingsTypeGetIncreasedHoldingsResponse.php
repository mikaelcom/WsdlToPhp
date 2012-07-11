<?php
/**
 * Class file for XiFundHoldingsTypeGetIncreasedHoldingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeGetIncreasedHoldingsResponse
 * @date 08/07/2012
 */
class XiFundHoldingsTypeGetIncreasedHoldingsResponse extends XiFundHoldingsWsdlClass
{
	/**
	 * The GetIncreasedHoldingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLFundHoldings
	 */
	public $GetIncreasedHoldingsResult;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFundHoldings GetIncreasedHoldingsResult
	 * @return XiFundHoldingsTypeGetIncreasedHoldingsResponse
	 */
	public function __construct($_GetIncreasedHoldingsResult = null)
	{
		parent::__construct(array('GetIncreasedHoldingsResult'=>$_GetIncreasedHoldingsResult));
	}
	/**
	 * Set GetIncreasedHoldingsResult
	 * @param OLFundHoldings GetIncreasedHoldingsResult
	 * @return OLFundHoldings
	 */
	public function setGetIncreasedHoldingsResult($_GetIncreasedHoldingsResult)
	{
		return ($this->GetIncreasedHoldingsResult = $_GetIncreasedHoldingsResult);
	}
	/**
	 * Get GetIncreasedHoldingsResult
	 * @return XiFundHoldingsTypeOLFundHoldings
	 */
	public function getGetIncreasedHoldingsResult()
	{
		return $this->GetIncreasedHoldingsResult;
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