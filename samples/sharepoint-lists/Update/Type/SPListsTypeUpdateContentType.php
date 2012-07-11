<?php
/**
 * Class file for SPListsTypeUpdateContentType
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentType
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentType extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The contentTypeId
	 * @var string
	 */
	public $contentTypeId;
	/**
	 * The contentTypeProperties
	 * @var SPListsTypeContentTypeProperties
	 */
	public $contentTypeProperties;
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
	 * The addToView
	 * @var string
	 */
	public $addToView;
	/**
	 * Constructor
	 * @param string listName
	 * @param string contentTypeId
	 * @param SPListsTypeContentTypeProperties contentTypeProperties
	 * @param SPListsTypeNewFields newFields
	 * @param SPListsTypeUpdateFields updateFields
	 * @param SPListsTypeDeleteFields deleteFields
	 * @param string addToView
	 * @return SPListsTypeUpdateContentType
	 */
	public function __construct($_listName = null,$_contentTypeId = null,$_contentTypeProperties = null,$_newFields = null,$_updateFields = null,$_deleteFields = null,$_addToView = null)
	{
		parent::__construct(array('listName'=>$_listName,'contentTypeId'=>$_contentTypeId,'contentTypeProperties'=>$_contentTypeProperties,'newFields'=>$_newFields,'updateFields'=>$_updateFields,'deleteFields'=>$_deleteFields,'addToView'=>$_addToView));
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
	 * Set contentTypeId
	 * @param string contentTypeId
	 * @return string
	 */
	public function setContentTypeId($_contentTypeId)
	{
		return ($this->contentTypeId = $_contentTypeId);
	}
	/**
	 * Get contentTypeId
	 * @return string
	 */
	public function getContentTypeId()
	{
		return $this->contentTypeId;
	}
	/**
	 * Set contentTypeProperties
	 * @param contentTypeProperties contentTypeProperties
	 * @return contentTypeProperties
	 */
	public function setContentTypeProperties($_contentTypeProperties)
	{
		return ($this->contentTypeProperties = $_contentTypeProperties);
	}
	/**
	 * Get contentTypeProperties
	 * @return SPListsTypecontentTypeProperties
	 */
	public function getContentTypeProperties()
	{
		return $this->contentTypeProperties;
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
	 * Set addToView
	 * @param string addToView
	 * @return string
	 */
	public function setAddToView($_addToView)
	{
		return ($this->addToView = $_addToView);
	}
	/**
	 * Get addToView
	 * @return string
	 */
	public function getAddToView()
	{
		return $this->addToView;
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