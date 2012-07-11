<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFutureResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFutureResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetHistoricalEnergyFutureResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetHistoricalEnergyFutureResult
	 * @return XiEnergyTypeGetHistoricalEnergyFutureResponse
	 */
	public function __construct($_GetHistoricalEnergyFutureResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFutureResult'=>$_GetHistoricalEnergyFutureResult));
	}
	/**
	 * Set GetHistoricalEnergyFutureResult
	 * @param FutureQuote GetHistoricalEnergyFutureResult
	 * @return FutureQuote
	 */
	public function setGetHistoricalEnergyFutureResult($_GetHistoricalEnergyFutureResult)
	{
		return ($this->GetHistoricalEnergyFutureResult = $_GetHistoricalEnergyFutureResult);
	}
	/**
	 * Get GetHistoricalEnergyFutureResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetHistoricalEnergyFutureResult()
	{
		return $this->GetHistoricalEnergyFutureResult;
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