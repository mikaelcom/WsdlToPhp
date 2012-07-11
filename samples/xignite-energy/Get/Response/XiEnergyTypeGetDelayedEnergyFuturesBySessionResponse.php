<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFuturesBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetDelayedEnergyFuturesBySessionResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetDelayedEnergyFuturesBySessionResult
	 * @return XiEnergyTypeGetDelayedEnergyFuturesBySessionResponse
	 */
	public function __construct($_GetDelayedEnergyFuturesBySessionResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFuturesBySessionResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetDelayedEnergyFuturesBySessionResult)));
	}
	/**
	 * Set GetDelayedEnergyFuturesBySessionResult
	 * @param ArrayOfFutureQuote GetDelayedEnergyFuturesBySessionResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedEnergyFuturesBySessionResult($_GetDelayedEnergyFuturesBySessionResult)
	{
		return ($this->GetDelayedEnergyFuturesBySessionResult = $_GetDelayedEnergyFuturesBySessionResult);
	}
	/**
	 * Get GetDelayedEnergyFuturesBySessionResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetDelayedEnergyFuturesBySessionResult()
	{
		return $this->GetDelayedEnergyFuturesBySessionResult;
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