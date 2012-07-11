<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFrontFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFrontFutureResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFrontFutureResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFrontFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetDelayedEnergyFrontFutureResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetDelayedEnergyFrontFutureResult
	 * @return XiEnergyTypeGetDelayedEnergyFrontFutureResponse
	 */
	public function __construct($_GetDelayedEnergyFrontFutureResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFrontFutureResult'=>$_GetDelayedEnergyFrontFutureResult));
	}
	/**
	 * Set GetDelayedEnergyFrontFutureResult
	 * @param FutureQuote GetDelayedEnergyFrontFutureResult
	 * @return FutureQuote
	 */
	public function setGetDelayedEnergyFrontFutureResult($_GetDelayedEnergyFrontFutureResult)
	{
		return ($this->GetDelayedEnergyFrontFutureResult = $_GetDelayedEnergyFrontFutureResult);
	}
	/**
	 * Get GetDelayedEnergyFrontFutureResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetDelayedEnergyFrontFutureResult()
	{
		return $this->GetDelayedEnergyFrontFutureResult;
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