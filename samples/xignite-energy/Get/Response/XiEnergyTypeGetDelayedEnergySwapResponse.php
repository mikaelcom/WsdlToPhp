<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergySwapResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergySwapResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergySwapResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergySwapResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeFutureQuote
	 */
	public $GetDelayedEnergySwapResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeFutureQuote GetDelayedEnergySwapResult
	 * @return XiEnergyTypeGetDelayedEnergySwapResponse
	 */
	public function __construct($_GetDelayedEnergySwapResult = null)
	{
		parent::__construct(array('GetDelayedEnergySwapResult'=>$_GetDelayedEnergySwapResult));
	}
	/**
	 * Set GetDelayedEnergySwapResult
	 * @param FutureQuote GetDelayedEnergySwapResult
	 * @return FutureQuote
	 */
	public function setGetDelayedEnergySwapResult($_GetDelayedEnergySwapResult)
	{
		return ($this->GetDelayedEnergySwapResult = $_GetDelayedEnergySwapResult);
	}
	/**
	 * Get GetDelayedEnergySwapResult
	 * @return XiEnergyTypeFutureQuote
	 */
	public function getGetDelayedEnergySwapResult()
	{
		return $this->GetDelayedEnergySwapResult;
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