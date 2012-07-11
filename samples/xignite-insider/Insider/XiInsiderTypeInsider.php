<?php
/**
 * Class file for XiInsiderTypeInsider
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeInsider
 * @date 08/07/2012
 */
class XiInsiderTypeInsider extends XiInsiderTypeCommon
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeAddress
	 */
	public $Address;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Name
	 * @param XiInsiderTypeAddress Address
	 * @return XiInsiderTypeInsider
	 */
	public function __construct($_CIK = null,$_Name = null,$_Address = null)
	{
		XiInsiderWsdlClass::__construct(array('CIK'=>$_CIK,'Name'=>$_Name,'Address'=>$_Address));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
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
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return XiInsiderTypeAddress
	 */
	public function getAddress()
	{
		return $this->Address;
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