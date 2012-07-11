<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFutureResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFutureResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetDelayedEnergyFutureResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetDelayedEnergyFutureResult
	 * @return XiEnergyTypeGetDelayedEnergyFutureResponse
	 */
	public function __construct($_GetDelayedEnergyFutureResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFutureResult'=>$_GetDelayedEnergyFutureResult));
	}
	/**
	 * Set GetDelayedEnergyFutureResult
	 * @param FutureQuote GetDelayedEnergyFutureResult
	 * @return FutureQuote
	 */
	public function setGetDelayedEnergyFutureResult($_GetDelayedEnergyFutureResult)
	{
		return ($this->GetDelayedEnergyFutureResult = $_GetDelayedEnergyFutureResult);
	}
	/**
	 * Get GetDelayedEnergyFutureResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetDelayedEnergyFutureResult()
	{
		return $this->GetDelayedEnergyFutureResult;
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