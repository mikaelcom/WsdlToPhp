<?php
/**
 * Class file for SPWebsTypeRemoveContentTypeXmlDocumentResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeRemoveContentTypeXmlDocumentResponse
 * @date 06/07/2012
 */
class SPWebsTypeRemoveContentTypeXmlDocumentResponse extends SPWebsWsdlClass
{
	/**
	 * The RemoveContentTypeXmlDocumentResult
	 * @var SPWebsTypeRemoveContentTypeXmlDocumentResult
	 */
	public $RemoveContentTypeXmlDocumentResult;
	/**
	 * Constructor
	 * @param SPWebsTypeRemoveContentTypeXmlDocumentResult RemoveContentTypeXmlDocumentResult
	 * @return SPWebsTypeRemoveContentTypeXmlDocumentResponse
	 */
	public function __construct($_RemoveContentTypeXmlDocumentResult = null)
	{
		parent::__construct(array('RemoveContentTypeXmlDocumentResult'=>$_RemoveContentTypeXmlDocumentResult));
	}
	/**
	 * Set RemoveContentTypeXmlDocumentResult
	 * @param RemoveContentTypeXmlDocumentResult RemoveContentTypeXmlDocumentResult
	 * @return RemoveContentTypeXmlDocumentResult
	 */
	public function setRemoveContentTypeXmlDocumentResult($_RemoveContentTypeXmlDocumentResult)
	{
		return ($this->RemoveContentTypeXmlDocumentResult = $_RemoveContentTypeXmlDocumentResult);
	}
	/**
	 * Get RemoveContentTypeXmlDocumentResult
	 * @return SPWebsTypeRemoveContentTypeXmlDocumentResult
	 */
	public function getRemoveContentTypeXmlDocumentResult()
	{
		return $this->RemoveContentTypeXmlDocumentResult;
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