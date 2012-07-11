<?php
/**
 * Class file for XiEdgarTypeReadDocumentResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeReadDocumentResponse
 * @date 08/07/2012
 */
class XiEdgarTypeReadDocumentResponse extends XiEdgarWsdlClass
{
	/**
	 * The ReadDocumentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeFile
	 */
	public $ReadDocumentResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeFile ReadDocumentResult
	 * @return XiEdgarTypeReadDocumentResponse
	 */
	public function __construct($_ReadDocumentResult = null)
	{
		parent::__construct(array('ReadDocumentResult'=>$_ReadDocumentResult));
	}
	/**
	 * Set ReadDocumentResult
	 * @param File ReadDocumentResult
	 * @return File
	 */
	public function setReadDocumentResult($_ReadDocumentResult)
	{
		return ($this->ReadDocumentResult = $_ReadDocumentResult);
	}
	/**
	 * Get ReadDocumentResult
	 * @return XiEdgarTypeFile
	 */
	public function getReadDocumentResult()
	{
		return $this->ReadDocumentResult;
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