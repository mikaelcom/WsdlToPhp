<?php
/**
 * Class file for SPListsTypeGetListContentTypesAndProperties
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListContentTypesAndProperties
 * @date 07/07/2012
 */
class SPListsTypeGetListContentTypesAndProperties extends SPListsWsdlClass
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
	 * The propertyPrefix
	 * @var string
	 */
	public $propertyPrefix;
	/**
	 * The includeWebProperties
	 * @var boolean
	 */
	public $includeWebProperties;
	/**
	 * Constructor
	 * @param string listName
	 * @param string contentTypeId
	 * @param string propertyPrefix
	 * @param boolean includeWebProperties
	 * @return SPListsTypeGetListContentTypesAndProperties
	 */
	public function __construct($_listName = null,$_contentTypeId = null,$_propertyPrefix = null,$_includeWebProperties = null)
	{
		parent::__construct(array('listName'=>$_listName,'contentTypeId'=>$_contentTypeId,'propertyPrefix'=>$_propertyPrefix,'includeWebProperties'=>$_includeWebProperties));
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
	 * Set propertyPrefix
	 * @param string propertyPrefix
	 * @return string
	 */
	public function setPropertyPrefix($_propertyPrefix)
	{
		return ($this->propertyPrefix = $_propertyPrefix);
	}
	/**
	 * Get propertyPrefix
	 * @return string
	 */
	public function getPropertyPrefix()
	{
		return $this->propertyPrefix;
	}
	/**
	 * Set includeWebProperties
	 * @param boolean includeWebProperties
	 * @return boolean
	 */
	public function setIncludeWebProperties($_includeWebProperties)
	{
		return ($this->includeWebProperties = $_includeWebProperties);
	}
	/**
	 * Get includeWebProperties
	 * @return boolean
	 */
	public function getIncludeWebProperties()
	{
		return $this->includeWebProperties;
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