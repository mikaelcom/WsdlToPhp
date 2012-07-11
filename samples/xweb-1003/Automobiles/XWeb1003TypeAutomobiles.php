<?php
/**
 * Class file for XWeb1003TypeAutomobiles
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAutomobiles
 * @date 09/07/2012
 */
class XWeb1003TypeAutomobiles extends XWeb1003WsdlClass
{
	/**
	 * The Automobile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeAutomobileType
	 */
	public $Automobile;
	/**
	 * Constructor
	 * @param XWeb1003TypeAutomobileType Automobile
	 * @return XWeb1003TypeAutomobiles
	 */
	public function __construct($_Automobile = null)
	{
		parent::__construct(array('Automobile'=>$_Automobile));
	}
	/**
	 * Set Automobile
	 * @param AutomobileType Automobile
	 * @return AutomobileType
	 */
	public function setAutomobile($_Automobile)
	{
		return ($this->Automobile = $_Automobile);
	}
	/**
	 * Get Automobile
	 * @return XWeb1003TypeAutomobileType
	 */
	public function getAutomobile()
	{
		return $this->Automobile;
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