<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergySpotResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergySpotResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergySpotResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergySpotResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetDelayedEnergySpotResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetDelayedEnergySpotResult
	 * @return XiEnergyTypeGetDelayedEnergySpotResponse
	 */
	public function __construct($_GetDelayedEnergySpotResult = null)
	{
		parent::__construct(array('GetDelayedEnergySpotResult'=>$_GetDelayedEnergySpotResult));
	}
	/**
	 * Set GetDelayedEnergySpotResult
	 * @param FutureQuote GetDelayedEnergySpotResult
	 * @return FutureQuote
	 */
	public function setGetDelayedEnergySpotResult($_GetDelayedEnergySpotResult)
	{
		return ($this->GetDelayedEnergySpotResult = $_GetDelayedEnergySpotResult);
	}
	/**
	 * Get GetDelayedEnergySpotResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetDelayedEnergySpotResult()
	{
		return $this->GetDelayedEnergySpotResult;
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