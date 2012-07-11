<?php
/**
 * Class file for SPUserGroupTypeGetRoleCollection
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetRoleCollection
 * @date 06/07/2012
 */
class SPUserGroupTypeGetRoleCollection extends SPUserGroupWsdlClass
{
	/**
	 * The roleNamesXml
	 * @var SPUserGroupTypeRoleNamesXml
	 */
	public $roleNamesXml;
	/**
	 * Constructor
	 * @param SPUserGroupTypeRoleNamesXml roleNamesXml
	 * @return SPUserGroupTypeGetRoleCollection
	 */
	public function __construct($_roleNamesXml = null)
	{
		parent::__construct(array('roleNamesXml'=>$_roleNamesXml));
	}
	/**
	 * Set roleNamesXml
	 * @param roleNamesXml roleNamesXml
	 * @return roleNamesXml
	 */
	public function setRoleNamesXml($_roleNamesXml)
	{
		return ($this->roleNamesXml = $_roleNamesXml);
	}
	/**
	 * Get roleNamesXml
	 * @return SPUserGroupTyperoleNamesXml
	 */
	public function getRoleNamesXml()
	{
		return $this->roleNamesXml;
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