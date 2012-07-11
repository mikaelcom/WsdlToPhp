<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergySpotsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergySpotsResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergySpotsResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergySpotsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetDelayedEnergySpotsResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetDelayedEnergySpotsResult
	 * @return XiEnergyTypeGetDelayedEnergySpotsResponse
	 */
	public function __construct($_GetDelayedEnergySpotsResult = null)
	{
		parent::__construct(array('GetDelayedEnergySpotsResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetDelayedEnergySpotsResult)));
	}
	/**
	 * Set GetDelayedEnergySpotsResult
	 * @param ArrayOfFutureQuote GetDelayedEnergySpotsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedEnergySpotsResult($_GetDelayedEnergySpotsResult)
	{
		return ($this->GetDelayedEnergySpotsResult = $_GetDelayedEnergySpotsResult);
	}
	/**
	 * Get GetDelayedEnergySpotsResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetDelayedEnergySpotsResult()
	{
		return $this->GetDelayedEnergySpotsResult;
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