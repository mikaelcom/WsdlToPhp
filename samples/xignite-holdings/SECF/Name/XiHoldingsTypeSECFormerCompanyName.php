<?php
/**
 * Class file for XiHoldingsTypeSECFormerCompanyName
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeSECFormerCompanyName
 * @date 08/07/2012
 */
class XiHoldingsTypeSECFormerCompanyName extends XiHoldingsWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The DateOfNameChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateOfNameChange;
	/**
	 * Constructor
	 * @param string Name
	 * @param string DateOfNameChange
	 * @return XiHoldingsTypeSECFormerCompanyName
	 */
	public function __construct($_Name = null,$_DateOfNameChange = null)
	{
		parent::__construct(array('Name'=>$_Name,'DateOfNameChange'=>$_DateOfNameChange));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set DateOfNameChange
	 * @param string DateOfNameChange
	 * @return string
	 */
	public function setDateOfNameChange($_DateOfNameChange)
	{
		return ($this->DateOfNameChange = $_DateOfNameChange);
	}
	/**
	 * Get DateOfNameChange
	 * @return string
	 */
	public function getDateOfNameChange()
	{
		return $this->DateOfNameChange;
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