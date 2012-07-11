<?php
/**
 * Class file for XiInsiderTypeRoster
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRoster
 * @date 08/07/2012
 */
class XiInsiderTypeRoster extends XiInsiderTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurity
	 */
	public $Security;
	/**
	 * The Roles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfRole
	 */
	public $Roles;
	/**
	 * Constructor
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeArrayOfRole Roles
	 * @return XiInsiderTypeRoster
	 */
	public function __construct($_Security = null,$_Roles = null)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'Roles'=>new XiInsiderTypeArrayOfRole($_Roles)));
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
	 * Set Roles
	 * @param ArrayOfRole Roles
	 * @return ArrayOfRole
	 */
	public function setRoles($_Roles)
	{
		return ($this->Roles = $_Roles);
	}
	/**
	 * Get Roles
	 * @return XiInsiderTypeArrayOfRole
	 */
	public function getRoles()
	{
		return $this->Roles;
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