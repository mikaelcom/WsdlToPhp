<?php
/**
 * Class file for XiInsiderTypeRole
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRole
 * @date 08/07/2012
 */
class XiInsiderTypeRole extends XiInsiderTypeCommon
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
	 * The Relationship
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRelationship
	 */
	public $Relationship;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Name
	 * @param XiInsiderTypeAddress Address
	 * @param XiInsiderTypeRelationship Relationship
	 * @param XiInsiderTypeSecurity Security
	 * @return XiInsiderTypeRole
	 */
	public function __construct($_CIK = null,$_Name = null,$_Address = null,$_Relationship = null,$_Security = null)
	{
		XiInsiderWsdlClass::__construct(array('CIK'=>$_CIK,'Name'=>$_Name,'Address'=>$_Address,'Relationship'=>$_Relationship,'Security'=>$_Security));
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
	 * Set Relationship
	 * @param Relationship Relationship
	 * @return Relationship
	 */
	public function setRelationship($_Relationship)
	{
		return ($this->Relationship = $_Relationship);
	}
	/**
	 * Get Relationship
	 * @return XiInsiderTypeRelationship
	 */
	public function getRelationship()
	{
		return $this->Relationship;
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiInsiderTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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