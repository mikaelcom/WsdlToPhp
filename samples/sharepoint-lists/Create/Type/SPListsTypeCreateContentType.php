<?php
/**
 * Class file for SPListsTypeCreateContentType
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCreateContentType
 * @date 07/07/2012
 */
class SPListsTypeCreateContentType extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
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
	 * The fields
	 * @var SPListsTypeFields
	 */
	public $fields;
	/**
	 * The contentTypeProperties
	 * @var SPListsTypeContentTypeProperties
	 */
	public $contentTypeProperties;
	/**
	 * The addToView
	 * @var string
	 */
	public $addToView;
	/**
	 * Constructor
	 * @param string listName
	 * @param string displayName
	 * @param string parentType
	 * @param SPListsTypeFields fields
	 * @param SPListsTypeContentTypeProperties contentTypeProperties
	 * @param string addToView
	 * @return SPListsTypeCreateContentType
	 */
	public function __construct($_listName = null,$_displayName = null,$_parentType = null,$_fields = null,$_contentTypeProperties = null,$_addToView = null)
	{
		parent::__construct(array('listName'=>$_listName,'displayName'=>$_displayName,'parentType'=>$_parentType,'fields'=>$_fields,'contentTypeProperties'=>$_contentTypeProperties,'addToView'=>$_addToView));
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
	 * Set fields
	 * @param fields fields
	 * @return fields
	 */
	public function setFields($_fields)
	{
		return ($this->fields = $_fields);
	}
	/**
	 * Get fields
	 * @return SPListsTypefields
	 */
	public function getFields()
	{
		return $this->fields;
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