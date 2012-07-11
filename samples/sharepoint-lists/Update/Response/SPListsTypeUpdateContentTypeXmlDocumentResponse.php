<?php
/**
 * Class file for SPListsTypeUpdateContentTypeXmlDocumentResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentTypeXmlDocumentResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentTypeXmlDocumentResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateContentTypeXmlDocumentResult
	 * @var SPListsTypeUpdateContentTypeXmlDocumentResult
	 */
	public $UpdateContentTypeXmlDocumentResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateContentTypeXmlDocumentResult UpdateContentTypeXmlDocumentResult
	 * @return SPListsTypeUpdateContentTypeXmlDocumentResponse
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
	 * @return SPListsTypeUpdateContentTypeXmlDocumentResult
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