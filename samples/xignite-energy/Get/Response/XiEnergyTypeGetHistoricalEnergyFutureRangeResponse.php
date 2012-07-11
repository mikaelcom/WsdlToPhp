<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureRangeResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureRangeResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuotes
	 */
	public $GetHistoricalEnergyFutureRangeResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuotes GetHistoricalEnergyFutureRangeResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureRangeResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureRangeResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureRangeResult'=>$_GetHistoricalEnergyFutureRangeResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureRangeResult
	 * @param FutureQuotes GetHistoricalEnergyFutureRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalEnergyFutureRangeResult($_GetHistoricalEnergyFutureRangeResult)
	{
		return ($this->GetHistoricalEnergyFutureRangeResult = $_GetHistoricalEnergyFutureRangeResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureRangeResult
	 * @return XiEnergyTypeFutureQuotes
	 */
	public function getGetHistoricalEnergyFutureRangeResult()
	{
		return $this->GetHistoricalEnergyFutureRangeResult;
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