<?php
/**
 * Class file for SPListDataRetrievalTypeFields
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeFields
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeFields extends SPListDataRetrievalWsdlClass
{
	/**
	 * The Field
	 * @var SPListDataRetrievalTypeField
	 */
	public $Field;
	/**
	 * The AllFields
	 * @var SPListDataRetrievalTypeAllFields
	 */
	public $AllFields;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeField Field
	 * @param SPListDataRetrievalTypeAllFields AllFields
	 * @return SPListDataRetrievalTypeFields
	 */
	public function __construct($_Field = null,$_AllFields = null)
	{
		parent::__construct(array('Field'=>$_Field,'AllFields'=>$_AllFields));
	}
	/**
	 * Set Field
	 * @param Field Field
	 * @return Field
	 */
	public function setField($_Field)
	{
		return ($this->Field = $_Field);
	}
	/**
	 * Get Field
	 * @return SPListDataRetrievalTypeField
	 */
	public function getField()
	{
		return $this->Field;
	}
	/**
	 * Set AllFields
	 * @param AllFields AllFields
	 * @return AllFields
	 */
	public function setAllFields($_AllFields)
	{
		return ($this->AllFields = $_AllFields);
	}
	/**
	 * Get AllFields
	 * @return SPListDataRetrievalTypeAllFields
	 */
	public function getAllFields()
	{
		return $this->AllFields;
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