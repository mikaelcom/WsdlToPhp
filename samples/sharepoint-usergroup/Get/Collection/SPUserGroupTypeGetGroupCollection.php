<?php
/**
 * Class file for SPUserGroupTypeGetGroupCollection
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetGroupCollection
 * @date 06/07/2012
 */
class SPUserGroupTypeGetGroupCollection extends SPUserGroupWsdlClass
{
	/**
	 * The groupNamesXml
	 * @var SPUserGroupTypeGroupNamesXml
	 */
	public $groupNamesXml;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGroupNamesXml groupNamesXml
	 * @return SPUserGroupTypeGetGroupCollection
	 */
	public function __construct($_groupNamesXml = null)
	{
		parent::__construct(array('groupNamesXml'=>$_groupNamesXml));
	}
	/**
	 * Set groupNamesXml
	 * @param groupNamesXml groupNamesXml
	 * @return groupNamesXml
	 */
	public function setGroupNamesXml($_groupNamesXml)
	{
		return ($this->groupNamesXml = $_groupNamesXml);
	}
	/**
	 * Get groupNamesXml
	 * @return SPUserGroupTypegroupNamesXml
	 */
	public function getGroupNamesXml()
	{
		return $this->groupNamesXml;
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