<?php
/**
 * Class file for SPWebsTypeUpdateContentTypeXmlDocumentResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateContentTypeXmlDocumentResponse
 * @date 06/07/2012
 */
class SPWebsTypeUpdateContentTypeXmlDocumentResponse extends SPWebsWsdlClass
{
	/**
	 * The UpdateContentTypeXmlDocumentResult
	 * @var SPWebsTypeUpdateContentTypeXmlDocumentResult
	 */
	public $UpdateContentTypeXmlDocumentResult;
	/**
	 * Constructor
	 * @param SPWebsTypeUpdateContentTypeXmlDocumentResult UpdateContentTypeXmlDocumentResult
	 * @return SPWebsTypeUpdateContentTypeXmlDocumentResponse
	 */
	public function __construct($_UpdateContentTypeXmlDocumentResult = null)
	{
		parent::__construct(array('UpdateContentTypeXmlDocumentResult'=>$_UpdateContentTypeXmlDocumentResult));
	}
	/**
	 * Set UpdateContentTypeXmlDocumentResult
	 * @param UpdateContentTypeXmlDocumentResult UpdateContentTypeXmlDocumentResult
	 * @return UpdateContentTypeXmlDocumentResult
	 */
	public function setUpdateContentTypeXmlDocumentResult($_UpdateContentTypeXmlDocumentResult)
	{
		return ($this->UpdateContentTypeXmlDocumentResult = $_UpdateContentTypeXmlDocumentResult);
	}
	/**
	 * Get UpdateContentTypeXmlDocumentResult
	 * @return SPWebsTypeUpdateContentTypeXmlDocumentResult
	 */
	public function getUpdateContentTypeXmlDocumentResult()
	{
		return $this->UpdateContentTypeXmlDocumentResult;
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