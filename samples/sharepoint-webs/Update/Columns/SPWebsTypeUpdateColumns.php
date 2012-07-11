<?php
/**
 * Class file for SPWebsTypeUpdateColumns
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateColumns
 * @date 06/07/2012
 */
class SPWebsTypeUpdateColumns extends SPWebsWsdlClass
{
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
	 * @param SPWebsTypeNewFields newFields
	 * @param SPWebsTypeUpdateFields updateFields
	 * @param SPWebsTypeDeleteFields deleteFields
	 * @return SPWebsTypeUpdateColumns
	 */
	public function __construct($_newFields = null,$_updateFields = null,$_deleteFields = null)
	{
		parent::__construct(array('newFields'=>$_newFields,'updateFields'=>$_updateFields,'deleteFields'=>$_deleteFields));
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