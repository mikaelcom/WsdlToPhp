<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergySwapRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergySwapRangeResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergySwapRangeResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergySwapRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuotes
	 */
	public $GetHistoricalEnergySwapRangeResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuotes GetHistoricalEnergySwapRangeResult
	 * @return XiEnergyTypeGetHistoricalEnergySwapRangeResponse
	 */
	public function __construct($_GetHistoricalEnergySwapRangeResult = null)
	{
		parent::__construct(array('GetHistoricalEnergySwapRangeResult'=>$_GetHistoricalEnergySwapRangeResult));
	}
	/**
	 * Set GetHistoricalEnergySwapRangeResult
	 * @param FutureQuotes GetHistoricalEnergySwapRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalEnergySwapRangeResult($_GetHistoricalEnergySwapRangeResult)
	{
		return ($this->GetHistoricalEnergySwapRangeResult = $_GetHistoricalEnergySwapRangeResult);
	}
	/**
	 * Get GetHistoricalEnergySwapRangeResult
	 * @return XiEnergyTypeFutureQuotes
	 */
	public function getGetHistoricalEnergySwapRangeResult()
	{
		return $this->GetHistoricalEnergySwapRangeResult;
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