<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergySpotRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergySpotRangeResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergySpotRangeResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergySpotRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuotes
	 */
	public $GetHistoricalEnergySpotRangeResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuotes GetHistoricalEnergySpotRangeResult
	 * @return XiEnergyTypeGetHistoricalEnergySpotRangeResponse
	 */
	public function __construct($_GetHistoricalEnergySpotRangeResult = null)
	{
		parent::__construct(array('GetHistoricalEnergySpotRangeResult'=>$_GetHistoricalEnergySpotRangeResult));
	}
	/**
	 * Set GetHistoricalEnergySpotRangeResult
	 * @param FutureQuotes GetHistoricalEnergySpotRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalEnergySpotRangeResult($_GetHistoricalEnergySpotRangeResult)
	{
		return ($this->GetHistoricalEnergySpotRangeResult = $_GetHistoricalEnergySpotRangeResult);
	}
	/**
	 * Get GetHistoricalEnergySpotRangeResult
	 * @return XiEnergyTypeFutureQuotes
	 */
	public function getGetHistoricalEnergySpotRangeResult()
	{
		return $this->GetHistoricalEnergySpotRangeResult;
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