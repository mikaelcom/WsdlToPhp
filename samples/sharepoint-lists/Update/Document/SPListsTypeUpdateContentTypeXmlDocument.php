<?php
/**
 * Class file for SPListsTypeUpdateContentTypeXmlDocument
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentTypeXmlDocument
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentTypeXmlDocument extends SPListsWsdlClass
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
	 * The newDocument
	 * @var SPListsTypeNewDocument
	 */
	public $newDocument;
	/**
	 * Constructor
	 * @param string listName
	 * @param string contentTypeId
	 * @param SPListsTypeNewDocument newDocument
	 * @return SPListsTypeUpdateContentTypeXmlDocument
	 */
	public function __construct($_listName = null,$_contentTypeId = null,$_newDocument = null)
	{
		parent::__construct(array('listName'=>$_listName,'contentTypeId'=>$_contentTypeId,'newDocument'=>$_newDocument));
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
	 * Set newDocument
	 * @param newDocument newDocument
	 * @return newDocument
	 */
	public function setNewDocument($_newDocument)
	{
		return ($this->newDocument = $_newDocument);
	}
	/**
	 * Get newDocument
	 * @return SPListsTypenewDocument
	 */
	public function getNewDocument()
	{
		return $this->newDocument;
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