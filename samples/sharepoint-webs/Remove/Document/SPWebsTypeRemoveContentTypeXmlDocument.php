<?php
/**
 * Class file for SPWebsTypeRemoveContentTypeXmlDocument
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeRemoveContentTypeXmlDocument
 * @date 06/07/2012
 */
class SPWebsTypeRemoveContentTypeXmlDocument extends SPWebsWsdlClass
{
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
	 * @param string contentTypeId
	 * @param string documentUri
	 * @return SPWebsTypeRemoveContentTypeXmlDocument
	 */
	public function __construct($_contentTypeId = null,$_documentUri = null)
	{
		parent::__construct(array('contentTypeId'=>$_contentTypeId,'documentUri'=>$_documentUri));
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