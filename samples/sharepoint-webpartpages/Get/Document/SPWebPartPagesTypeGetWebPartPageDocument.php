<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPageDocument
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPageDocument
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPageDocument extends SPWebPartPagesWsdlClass
{
	/**
	 * The documentName
	 * @var string
	 */
	public $documentName;
	/**
	 * Constructor
	 * @param string documentName
	 * @return SPWebPartPagesTypeGetWebPartPageDocument
	 */
	public function __construct($_documentName = null)
	{
		parent::__construct(array('documentName'=>$_documentName));
	}
	/**
	 * Set documentName
	 * @param string documentName
	 * @return string
	 */
	public function setDocumentName($_documentName)
	{
		return ($this->documentName = $_documentName);
	}
	/**
	 * Get documentName
	 * @return string
	 */
	public function getDocumentName()
	{
		return $this->documentName;
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