<?php
/**
 * Class file for SPUserGroupTypeRemoveUserCollectionFromSite
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeRemoveUserCollectionFromSite
 * @date 06/07/2012
 */
class SPUserGroupTypeRemoveUserCollectionFromSite extends SPUserGroupWsdlClass
{
	/**
	 * The userLoginNamesXml
	 * @var SPUserGroupTypeUserLoginNamesXml
	 */
	public $userLoginNamesXml;
	/**
	 * Constructor
	 * @param SPUserGroupTypeUserLoginNamesXml userLoginNamesXml
	 * @return SPUserGroupTypeRemoveUserCollectionFromSite
	 */
	public function __construct($_userLoginNamesXml = null)
	{
		parent::__construct(array('userLoginNamesXml'=>$_userLoginNamesXml));
	}
	/**
	 * Set userLoginNamesXml
	 * @param userLoginNamesXml userLoginNamesXml
	 * @return userLoginNamesXml
	 */
	public function setUserLoginNamesXml($_userLoginNamesXml)
	{
		return ($this->userLoginNamesXml = $_userLoginNamesXml);
	}
	/**
	 * Get userLoginNamesXml
	 * @return SPUserGroupTypeuserLoginNamesXml
	 */
	public function getUserLoginNamesXml()
	{
		return $this->userLoginNamesXml;
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