<?php
/**
 * Class file for SPListDataRetrievalTypeAllFields
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeAllFields
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeAllFields extends SPListDataRetrievalWsdlClass
{
	/**
	 * The IncludeHiddenFields
	 * @var boolean
	 */
	public $IncludeHiddenFields;
	/**
	 * Constructor
	 * @param boolean IncludeHiddenFields
	 * @return SPListDataRetrievalTypeAllFields
	 */
	public function __construct($_IncludeHiddenFields = null)
	{
		parent::__construct(array('IncludeHiddenFields'=>$_IncludeHiddenFields));
	}
	/**
	 * Set IncludeHiddenFields
	 * @param boolean IncludeHiddenFields
	 * @return boolean
	 */
	public function setIncludeHiddenFields($_IncludeHiddenFields)
	{
		return ($this->IncludeHiddenFields = $_IncludeHiddenFields);
	}
	/**
	 * Get IncludeHiddenFields
	 * @return boolean
	 */
	public function getIncludeHiddenFields()
	{
		return $this->IncludeHiddenFields;
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