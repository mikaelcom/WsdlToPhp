<?php
/**
 * Class file for SPListDataRetrievalTypeRequestHeader
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeRequestHeader
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeRequestHeader extends SPListDataRetrievalWsdlClass
{
	/**
	 * The document
	 * @var DocumentType
	 */
	public $document;
	/**
	 * The method
	 * @var MethodType
	 */
	public $method;
	/**
	 * Constructor
	 * @param DocumentType document
	 * @param MethodType method
	 * @return SPListDataRetrievalTypeRequestHeader
	 */
	public function __construct($_document = null,$_method = null)
	{
		parent::__construct(array('document'=>$_document,'method'=>$_method));
	}
	/**
	 * Set document
	 * @param DocumentType document
	 * @return DocumentType
	 */
	public function setDocument($_document)
	{
		return ($this->document = $_document);
	}
	/**
	 * Get document
	 * @return DocumentType
	 */
	public function getDocument()
	{
		return $this->document;
	}
	/**
	 * Set method
	 * @param MethodType method
	 * @return MethodType
	 */
	public function setMethod($_method)
	{
		return ($this->method = $_method);
	}
	/**
	 * Get method
	 * @return MethodType
	 */
	public function getMethod()
	{
		return $this->method;
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