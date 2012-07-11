<?php
/**
 * Class file for XiEnergyTypeGetEnergyTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetEnergyTickResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetEnergyTickResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetEnergyTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeSingleTick
	 */
	public $GetEnergyTickResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeSingleTick GetEnergyTickResult
	 * @return XiEnergyTypeGetEnergyTickResponse
	 */
	public function __construct($_GetEnergyTickResult = null)
	{
		parent::__construct(array('GetEnergyTickResult'=>$_GetEnergyTickResult));
	}
	/**
	 * Set GetEnergyTickResult
	 * @param SingleTick GetEnergyTickResult
	 * @return SingleTick
	 */
	public function setGetEnergyTickResult($_GetEnergyTickResult)
	{
		return ($this->GetEnergyTickResult = $_GetEnergyTickResult);
	}
	/**
	 * Get GetEnergyTickResult
	 * @return XiEnergyTypeSingleTick
	 */
	public function getGetEnergyTickResult()
	{
		return $this->GetEnergyTickResult;
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