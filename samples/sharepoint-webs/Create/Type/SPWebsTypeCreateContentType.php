<?php
/**
 * Class file for SPWebsTypeCreateContentType
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeCreateContentType
 * @date 06/07/2012
 */
class SPWebsTypeCreateContentType extends SPWebsWsdlClass
{
	/**
	 * The displayName
	 * @var string
	 */
	public $displayName;
	/**
	 * The parentType
	 * @var string
	 */
	public $parentType;
	/**
	 * The newFields
	 * @var SPWebsTypeNewFields
	 */
	public $newFields;
	/**
	 * The contentTypeProperties
	 * @var SPWebsTypeContentTypeProperties
	 */
	public $contentTypeProperties;
	/**
	 * Constructor
	 * @param string displayName
	 * @param string parentType
	 * @param SPWebsTypeNewFields newFields
	 * @param SPWebsTypeContentTypeProperties contentTypeProperties
	 * @return SPWebsTypeCreateContentType
	 */
	public function __construct($_displayName = null,$_parentType = null,$_newFields = null,$_contentTypeProperties = null)
	{
		parent::__construct(array('displayName'=>$_displayName,'parentType'=>$_parentType,'newFields'=>$_newFields,'contentTypeProperties'=>$_contentTypeProperties));
	}
	/**
	 * Set displayName
	 * @param string displayName
	 * @return string
	 */
	public function setDisplayName($_displayName)
	{
		return ($this->displayName = $_displayName);
	}
	/**
	 * Get displayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}
	/**
	 * Set parentType
	 * @param string parentType
	 * @return string
	 */
	public function setParentType($_parentType)
	{
		return ($this->parentType = $_parentType);
	}
	/**
	 * Get parentType
	 * @return string
	 */
	public function getParentType()
	{
		return $this->parentType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>