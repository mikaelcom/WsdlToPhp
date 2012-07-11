<?php
/**
 * Class file for SPWebsTypeUpdateContentType
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateContentType
 * @date 06/07/2012
 */
class SPWebsTypeUpdateContentType extends SPWebsWsdlClass
{
	/**
	 * The contentTypeId
	 * @var string
	 */
	public $contentTypeId;
	/**
	 * The contentTypeProperties
	 * @var SPWebsTypeContentTypeProperties
	 */
	public $contentTypeProperties;
	/**
	 * The newFields
	 * @var SPWebsTypeNewFields
	 */
	public $newFields;
	/**
	 * The updateFields
	 * @var SPWebsTypeUpdateFields
	 */
	public $updateFields;
	/**
	 * The deleteFields
	 * @var SPWebsTypeDeleteFields
	 */
	public $deleteFields;
	/**
	 * Constructor
	 * @param string contentTypeId
	 * @param SPWebsTypeContentTypeProperties contentTypeProperties
	 * @param SPWebsTypeNewFields newFields
	 * @param SPWebsTypeUpdateFields updateFields
	 * @param SPWebsTypeDeleteFields deleteFields
	 * @return SPWebsTypeUpdateContentType
	 */
	public function __construct($_contentTypeId = null,$_contentTypeProperties = null,$_newFields = null,$_updateFields = null,$_deleteFields = null)
	{
		parent::__construct(array('contentTypeId'=>$_contentTypeId,'contentTypeProperties'=>$_contentTypeProperties,'newFields'=>$_newFields,'updateFields'=>$_updateFields,'deleteFields'=>$_deleteFields));
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
	 * @return SPWebsTypecontentTypeProperties
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
	 * @return SPWebsTypenewFields
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
	 * @return SPWebsTypeupdateFields
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
	 * @return SPWebsTypedeleteFields
	 */
	public function getDeleteFields()
	{
		return $this->deleteFields;
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