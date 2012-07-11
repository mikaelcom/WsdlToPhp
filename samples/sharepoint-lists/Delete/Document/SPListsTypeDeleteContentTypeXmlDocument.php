<?php
/**
 * Class file for SPListsTypeDeleteContentTypeXmlDocument
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeDeleteContentTypeXmlDocument
 * @date 07/07/2012
 */
class SPListsTypeDeleteContentTypeXmlDocument extends SPListsWsdlClass
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
	 * The documentUri
	 * @var string
	 */
	public $documentUri;
	/**
	 * Constructor
	 * @param string listName
	 * @param string contentTypeId
	 * @param string documentUri
	 * @return SPListsTypeDeleteContentTypeXmlDocument
	 */
	public function __construct($_listName = null,$_contentTypeId = null,$_documentUri = null)
	{
		parent::__construct(array('listName'=>$_listName,'contentTypeId'=>$_contentTypeId,'documentUri'=>$_documentUri));
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
	 * Set documentUri
	 * @param string documentUri
	 * @return string
	 */
	public function setDocumentUri($_documentUri)
	{
		return ($this->documentUri = $_documentUri);
	}
	/**
	 * Get documentUri
	 * @return string
	 */
	public function getDocumentUri()
	{
		return $this->documentUri;
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