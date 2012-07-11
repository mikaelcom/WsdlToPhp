<?php
/**
 * Class file for SPWebsTypeGetContentTypeResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetContentTypeResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetContentTypeResponse extends SPWebsWsdlClass
{
	/**
	 * The GetContentTypeResult
	 * @var SPWebsTypeGetContentTypeResult
	 */
	public $GetContentTypeResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetContentTypeResult GetContentTypeResult
	 * @return SPWebsTypeGetContentTypeResponse
	 */
	public function __construct($_GetContentTypeResult = null)
	{
		parent::__construct(array('GetContentTypeResult'=>$_GetContentTypeResult));
	}
	/**
	 * Set GetContentTypeResult
	 * @param GetContentTypeResult GetContentTypeResult
	 * @return GetContentTypeResult
	 */
	public function setGetContentTypeResult($_GetContentTypeResult)
	{
		return ($this->GetContentTypeResult = $_GetContentTypeResult);
	}
	/**
	 * Get GetContentTypeResult
	 * @return SPWebsTypeGetContentTypeResult
	 */
	public function getGetContentTypeResult()
	{
		return $this->GetContentTypeResult;
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