<?php
/**
 * Class file for XiEdgarTypeGetPDFDocumentResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetPDFDocumentResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetPDFDocumentResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetPDFDocumentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypePDFFile
	 */
	public $GetPDFDocumentResult;
	/**
	 * Constructor
	 * @param XiEdgarTypePDFFile GetPDFDocumentResult
	 * @return XiEdgarTypeGetPDFDocumentResponse
	 */
	public function __construct($_GetPDFDocumentResult = null)
	{
		parent::__construct(array('GetPDFDocumentResult'=>$_GetPDFDocumentResult));
	}
	/**
	 * Set GetPDFDocumentResult
	 * @param PDFFile GetPDFDocumentResult
	 * @return PDFFile
	 */
	public function setGetPDFDocumentResult($_GetPDFDocumentResult)
	{
		return ($this->GetPDFDocumentResult = $_GetPDFDocumentResult);
	}
	/**
	 * Get GetPDFDocumentResult
	 * @return XiEdgarTypePDFFile
	 */
	public function getGetPDFDocumentResult()
	{
		return $this->GetPDFDocumentResult;
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