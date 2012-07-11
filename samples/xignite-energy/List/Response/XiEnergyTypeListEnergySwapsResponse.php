<?php
/**
 * Class file for XiEnergyTypeListEnergySwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeListEnergySwapsResponse
 * @date 08/07/2012
 */
class XiEnergyTypeListEnergySwapsResponse extends XiEnergyWsdlClass
{
	/**
	 * The ListEnergySwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFuture
	 */
	public $ListEnergySwapsResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFuture ListEnergySwapsResult
	 * @return XiEnergyTypeListEnergySwapsResponse
	 */
	public function __construct($_ListEnergySwapsResult = null)
	{
		parent::__construct(array('ListEnergySwapsResult'=>new XiEnergyTypeArrayOfFuture($_ListEnergySwapsResult)));
	}
	/**
	 * Set ListEnergySwapsResult
	 * @param ArrayOfFuture ListEnergySwapsResult
	 * @return ArrayOfFuture
	 */
	public function setListEnergySwapsResult($_ListEnergySwapsResult)
	{
		return ($this->ListEnergySwapsResult = $_ListEnergySwapsResult);
	}
	/**
	 * Get ListEnergySwapsResult
	 * @return XiEnergyTypeArrayOfFuture
	 */
	public function getListEnergySwapsResult()
	{
		return $this->ListEnergySwapsResult;
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