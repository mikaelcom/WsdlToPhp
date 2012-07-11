<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergySwapResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergySwapResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergySwapResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergySwapResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetHistoricalEnergySwapResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetHistoricalEnergySwapResult
	 * @return XiEnergyTypeGetHistoricalEnergySwapResponse
	 */
	public function __construct($_GetHistoricalEnergySwapResult = null)
	{
		parent::__construct(array('GetHistoricalEnergySwapResult'=>$_GetHistoricalEnergySwapResult));
	}
	/**
	 * Set GetHistoricalEnergySwapResult
	 * @param FutureQuote GetHistoricalEnergySwapResult
	 * @return FutureQuote
	 */
	public function setGetHistoricalEnergySwapResult($_GetHistoricalEnergySwapResult)
	{
		return ($this->GetHistoricalEnergySwapResult = $_GetHistoricalEnergySwapResult);
	}
	/**
	 * Get GetHistoricalEnergySwapResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetHistoricalEnergySwapResult()
	{
		return $this->GetHistoricalEnergySwapResult;
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