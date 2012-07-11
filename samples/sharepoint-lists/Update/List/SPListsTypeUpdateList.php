<?php
/**
 * Class file for SPListsTypeUpdateList
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateList
 * @date 07/07/2012
 */
class SPListsTypeUpdateList extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The listProperties
	 * @var SPListsTypeListProperties
	 */
	public $listProperties;
	/**
	 * The newFields
	 * @var SPListsTypeNewFields
	 */
	public $newFields;
	/**
	 * The updateFields
	 * @var SPListsTypeUpdateFields
	 */
	public $updateFields;
	/**
	 * The deleteFields
	 * @var SPListsTypeDeleteFields
	 */
	public $deleteFields;
	/**
	 * The listVersion
	 * @var string
	 */
	public $listVersion;
	/**
	 * Constructor
	 * @param string listName
	 * @param SPListsTypeListProperties listProperties
	 * @param SPListsTypeNewFields newFields
	 * @param SPListsTypeUpdateFields updateFields
	 * @param SPListsTypeDeleteFields deleteFields
	 * @param string listVersion
	 * @return SPListsTypeUpdateList
	 */
	public function __construct($_listName = null,$_listProperties = null,$_newFields = null,$_updateFields = null,$_deleteFields = null,$_listVersion = null)
	{
		parent::__construct(array('listName'=>$_listName,'listProperties'=>$_listProperties,'newFields'=>$_newFields,'updateFields'=>$_updateFields,'deleteFields'=>$_deleteFields,'listVersion'=>$_listVersion));
	}
	/**
	 * Set listName
	 * @param string listName
	 * @return string
	 */
	public function setListName($_listName)
	{
		return ($this->listName = $_listName);
	}
	/**
	 * Get listName
	 * @return string
	 */
	public function getListName()
	{
		return $this->listName;
	}
	/**
	 * Set listProperties
	 * @param listProperties listProperties
	 * @return listProperties
	 */
	public function setListProperties($_listProperties)
	{
		return ($this->listProperties = $_listProperties);
	}
	/**
	 * Get listProperties
	 * @return SPListsTypelistProperties
	 */
	public function getListProperties()
	{
		return $this->listProperties;
	}
	/**
	 * Set newFields
	 * @param newFields newFields
	 * @return newFields
	 */
	public function setNewFields($_newFields)
	{
		return ($this->newFields = $_newFields);
	}
	/**
	 * Get newFields
	 * @return SPListsTypenewFields
	 */
	public function getNewFields()
	{
		return $this->newFields;
	}
	/**
	 * Set updateFields
	 * @param updateFields updateFields
	 * @return updateFields
	 */
	public function setUpdateFields($_updateFields)
	{
		return ($this->updateFields = $_updateFields);
	}
	/**
	 * Get updateFields
	 * @return SPListsTypeupdateFields
	 */
	public function getUpdateFields()
	{
		return $this->updateFields;
	}
	/**
	 * Set deleteFields
	 * @param deleteFields deleteFields
	 * @return deleteFields
	 */
	public function setDeleteFields($_deleteFields)
	{
		return ($this->deleteFields = $_deleteFields);
	}
	/**
	 * Get deleteFields
	 * @return SPListsTypedeleteFields
	 */
	public function getDeleteFields()
	{
		return $this->deleteFields;
	}
	/**
	 * Set listVersion
	 * @param string listVersion
	 * @return string
	 */
	public function setListVersion($_listVersion)
	{
		return ($this->listVersion = $_listVersion);
	}
	/**
	 * Get listVersion
	 * @return string
	 */
	public function getListVersion()
	{
		return $this->listVersion;
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