<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPageDocumentResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPageDocumentResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPageDocumentResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetWebPartPageDocumentResult
	 * @var string
	 */
	public $GetWebPartPageDocumentResult;
	/**
	 * Constructor
	 * @param string GetWebPartPageDocumentResult
	 * @return SPWebPartPagesTypeGetWebPartPageDocumentResponse
	 */
	public function __construct($_GetWebPartPageDocumentResult = null)
	{
		parent::__construct(array('GetWebPartPageDocumentResult'=>$_GetWebPartPageDocumentResult));
	}
	/**
	 * Set GetWebPartPageDocumentResult
	 * @param string GetWebPartPageDocumentResult
	 * @return string
	 */
	public function setGetWebPartPageDocumentResult($_GetWebPartPageDocumentResult)
	{
		return ($this->GetWebPartPageDocumentResult = $_GetWebPartPageDocumentResult);
	}
	/**
	 * Get GetWebPartPageDocumentResult
	 * @return string
	 */
	public function getGetWebPartPageDocumentResult()
	{
		return $this->GetWebPartPageDocumentResult;
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