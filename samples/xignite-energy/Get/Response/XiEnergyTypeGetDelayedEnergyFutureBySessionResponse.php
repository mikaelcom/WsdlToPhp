<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFutureBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFutureBySessionResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFutureBySessionResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFutureBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetDelayedEnergyFutureBySessionResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetDelayedEnergyFutureBySessionResult
	 * @return XiEnergyTypeGetDelayedEnergyFutureBySessionResponse
	 */
	public function __construct($_GetDelayedEnergyFutureBySessionResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFutureBySessionResult'=>$_GetDelayedEnergyFutureBySessionResult));
	}
	/**
	 * Set GetDelayedEnergyFutureBySessionResult
	 * @param FutureQuote GetDelayedEnergyFutureBySessionResult
	 * @return FutureQuote
	 */
	public function setGetDelayedEnergyFutureBySessionResult($_GetDelayedEnergyFutureBySessionResult)
	{
		return ($this->GetDelayedEnergyFutureBySessionResult = $_GetDelayedEnergyFutureBySessionResult);
	}
	/**
	 * Get GetDelayedEnergyFutureBySessionResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetDelayedEnergyFutureBySessionResult()
	{
		return $this->GetDelayedEnergyFutureBySessionResult;
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