<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFutureStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFutureStripResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFutureStripResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFutureStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeStrip
	 */
	public $GetDelayedEnergyFutureStripResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeStrip GetDelayedEnergyFutureStripResult
	 * @return XiEnergyTypeGetDelayedEnergyFutureStripResponse
	 */
	public function __construct($_GetDelayedEnergyFutureStripResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFutureStripResult'=>$_GetDelayedEnergyFutureStripResult));
	}
	/**
	 * Set GetDelayedEnergyFutureStripResult
	 * @param Strip GetDelayedEnergyFutureStripResult
	 * @return Strip
	 */
	public function setGetDelayedEnergyFutureStripResult($_GetDelayedEnergyFutureStripResult)
	{
		return ($this->GetDelayedEnergyFutureStripResult = $_GetDelayedEnergyFutureStripResult);
	}
	/**
	 * Get GetDelayedEnergyFutureStripResult
	 * @return XiEnergyTypeStrip
	 */
	public function getGetDelayedEnergyFutureStripResult()
	{
		return $this->GetDelayedEnergyFutureStripResult;
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