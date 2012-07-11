<?php
/**
 * Class file for SPListsTypeDeleteContentTypeXmlDocumentResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeDeleteContentTypeXmlDocumentResponse
 * @date 07/07/2012
 */
class SPListsTypeDeleteContentTypeXmlDocumentResponse extends SPListsWsdlClass
{
	/**
	 * The DeleteContentTypeXmlDocumentResult
	 * @var SPListsTypeDeleteContentTypeXmlDocumentResult
	 */
	public $DeleteContentTypeXmlDocumentResult;
	/**
	 * Constructor
	 * @param SPListsTypeDeleteContentTypeXmlDocumentResult DeleteContentTypeXmlDocumentResult
	 * @return SPListsTypeDeleteContentTypeXmlDocumentResponse
	 */
	public function __construct($_DeleteContentTypeXmlDocumentResult = null)
	{
		parent::__construct(array('DeleteContentTypeXmlDocumentResult'=>$_DeleteContentTypeXmlDocumentResult));
	}
	/**
	 * Set DeleteContentTypeXmlDocumentResult
	 * @param DeleteContentTypeXmlDocumentResult DeleteContentTypeXmlDocumentResult
	 * @return DeleteContentTypeXmlDocumentResult
	 */
	public function setDeleteContentTypeXmlDocumentResult($_DeleteContentTypeXmlDocumentResult)
	{
		return ($this->DeleteContentTypeXmlDocumentResult = $_DeleteContentTypeXmlDocumentResult);
	}
	/**
	 * Get DeleteContentTypeXmlDocumentResult
	 * @return SPListsTypeDeleteContentTypeXmlDocumentResult
	 */
	public function getDeleteContentTypeXmlDocumentResult()
	{
		return $this->DeleteContentTypeXmlDocumentResult;
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