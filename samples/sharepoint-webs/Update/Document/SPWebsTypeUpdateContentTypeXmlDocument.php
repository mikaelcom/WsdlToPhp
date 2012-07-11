<?php
/**
 * Class file for SPWebsTypeUpdateContentTypeXmlDocument
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateContentTypeXmlDocument
 * @date 06/07/2012
 */
class SPWebsTypeUpdateContentTypeXmlDocument extends SPWebsWsdlClass
{
	/**
	 * The contentTypeId
	 * @var string
	 */
	public $contentTypeId;
	/**
	 * The newDocument
	 * @var SPWebsTypeNewDocument
	 */
	public $newDocument;
	/**
	 * Constructor
	 * @param string contentTypeId
	 * @param SPWebsTypeNewDocument newDocument
	 * @return SPWebsTypeUpdateContentTypeXmlDocument
	 */
	public function __construct($_contentTypeId = null,$_newDocument = null)
	{
		parent::__construct(array('contentTypeId'=>$_contentTypeId,'newDocument'=>$_newDocument));
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
	 * @return SPWebsTypenewDocument
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