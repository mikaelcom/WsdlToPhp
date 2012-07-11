<?php
/**
 * Class file for SPListsTypeDeleteContentType
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeDeleteContentType
 * @date 07/07/2012
 */
class SPListsTypeDeleteContentType extends SPListsWsdlClass
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
	 * Constructor
	 * @param string listName
	 * @param string contentTypeId
	 * @return SPListsTypeDeleteContentType
	 */
	public function __construct($_listName = null,$_contentTypeId = null)
	{
		parent::__construct(array('listName'=>$_listName,'contentTypeId'=>$_contentTypeId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>