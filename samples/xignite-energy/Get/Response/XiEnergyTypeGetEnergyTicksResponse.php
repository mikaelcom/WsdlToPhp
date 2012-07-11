<?php
/**
 * Class file for XiEnergyTypeGetEnergyTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetEnergyTicksResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetEnergyTicksResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetEnergyTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeTicks
	 */
	public $GetEnergyTicksResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeTicks GetEnergyTicksResult
	 * @return XiEnergyTypeGetEnergyTicksResponse
	 */
	public function __construct($_GetEnergyTicksResult = null)
	{
		parent::__construct(array('GetEnergyTicksResult'=>$_GetEnergyTicksResult));
	}
	/**
	 * Set GetEnergyTicksResult
	 * @param Ticks GetEnergyTicksResult
	 * @return Ticks
	 */
	public function setGetEnergyTicksResult($_GetEnergyTicksResult)
	{
		return ($this->GetEnergyTicksResult = $_GetEnergyTicksResult);
	}
	/**
	 * Get GetEnergyTicksResult
	 * @return XiEnergyTypeTicks
	 */
	public function getGetEnergyTicksResult()
	{
		return $this->GetEnergyTicksResult;
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