<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyTicksResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyTicksResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeTicks
	 */
	public $GetHistoricalEnergyTicksResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeTicks GetHistoricalEnergyTicksResult
	 * @return XiEnergyTypeGetHistoricalEnergyTicksResponse
	 */
	public function __construct($_GetHistoricalEnergyTicksResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyTicksResult'=>$_GetHistoricalEnergyTicksResult));
	}
	/**
	 * Set GetHistoricalEnergyTicksResult
	 * @param Ticks GetHistoricalEnergyTicksResult
	 * @return Ticks
	 */
	public function setGetHistoricalEnergyTicksResult($_GetHistoricalEnergyTicksResult)
	{
		return ($this->GetHistoricalEnergyTicksResult = $_GetHistoricalEnergyTicksResult);
	}
	/**
	 * Get GetHistoricalEnergyTicksResult
	 * @return XiEnergyTypeTicks
	 */
	public function getGetHistoricalEnergyTicksResult()
	{
		return $this->GetHistoricalEnergyTicksResult;
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