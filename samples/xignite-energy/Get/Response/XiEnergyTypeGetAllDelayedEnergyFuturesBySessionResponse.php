<?php
/**
 * Class file for XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAllDelayedEnergyFuturesBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedEnergyFuturesBySessionResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetAllDelayedEnergyFuturesBySessionResult
	 * @return XiEnergyTypeGetAllDelayedEnergyFuturesBySessionResponse
	 */
	public function __construct($_GetAllDelayedEnergyFuturesBySessionResult = null)
	{
		parent::__construct(array('GetAllDelayedEnergyFuturesBySessionResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetAllDelayedEnergyFuturesBySessionResult)));
	}
	/**
	 * Set GetAllDelayedEnergyFuturesBySessionResult
	 * @param ArrayOfFutureQuote GetAllDelayedEnergyFuturesBySessionResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedEnergyFuturesBySessionResult($_GetAllDelayedEnergyFuturesBySessionResult)
	{
		return ($this->GetAllDelayedEnergyFuturesBySessionResult = $_GetAllDelayedEnergyFuturesBySessionResult);
	}
	/**
	 * Get GetAllDelayedEnergyFuturesBySessionResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedEnergyFuturesBySessionResult()
	{
		return $this->GetAllDelayedEnergyFuturesBySessionResult;
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