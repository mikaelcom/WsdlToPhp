<?php
/**
 * Class file for XiEnergyTypeGetAvailableEnergySwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAvailableEnergySwapsResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAvailableEnergySwapsResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAvailableEnergySwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFuture
	 */
	public $GetAvailableEnergySwapsResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFuture GetAvailableEnergySwapsResult
	 * @return XiEnergyTypeGetAvailableEnergySwapsResponse
	 */
	public function __construct($_GetAvailableEnergySwapsResult = null)
	{
		parent::__construct(array('GetAvailableEnergySwapsResult'=>new XiEnergyTypeArrayOfFuture($_GetAvailableEnergySwapsResult)));
	}
	/**
	 * Set GetAvailableEnergySwapsResult
	 * @param ArrayOfFuture GetAvailableEnergySwapsResult
	 * @return ArrayOfFuture
	 */
	public function setGetAvailableEnergySwapsResult($_GetAvailableEnergySwapsResult)
	{
		return ($this->GetAvailableEnergySwapsResult = $_GetAvailableEnergySwapsResult);
	}
	/**
	 * Get GetAvailableEnergySwapsResult
	 * @return XiEnergyTypeArrayOfFuture
	 */
	public function getGetAvailableEnergySwapsResult()
	{
		return $this->GetAvailableEnergySwapsResult;
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