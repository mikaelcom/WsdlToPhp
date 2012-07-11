<?php
/**
 * Class file for SPListsTypeUpdateContentTypesXmlDocumentResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUpdateContentTypesXmlDocumentResponse
 * @date 07/07/2012
 */
class SPListsTypeUpdateContentTypesXmlDocumentResponse extends SPListsWsdlClass
{
	/**
	 * The UpdateContentTypesXmlDocumentResult
	 * @var SPListsTypeUpdateContentTypesXmlDocumentResult
	 */
	public $UpdateContentTypesXmlDocumentResult;
	/**
	 * Constructor
	 * @param SPListsTypeUpdateContentTypesXmlDocumentResult UpdateContentTypesXmlDocumentResult
	 * @return SPListsTypeUpdateContentTypesXmlDocumentResponse
	 */
	public function __construct($_UpdateContentTypesXmlDocumentResult = null)
	{
		parent::__construct(array('UpdateContentTypesXmlDocumentResult'=>$_UpdateContentTypesXmlDocumentResult));
	}
	/**
	 * Set UpdateContentTypesXmlDocumentResult
	 * @param UpdateContentTypesXmlDocumentResult UpdateContentTypesXmlDocumentResult
	 * @return UpdateContentTypesXmlDocumentResult
	 */
	public function setUpdateContentTypesXmlDocumentResult($_UpdateContentTypesXmlDocumentResult)
	{
		return ($this->UpdateContentTypesXmlDocumentResult = $_UpdateContentTypesXmlDocumentResult);
	}
	/**
	 * Get UpdateContentTypesXmlDocumentResult
	 * @return SPListsTypeUpdateContentTypesXmlDocumentResult
	 */
	public function getUpdateContentTypesXmlDocumentResult()
	{
		return $this->UpdateContentTypesXmlDocumentResult;
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