<?php
/**
 * Class file for SPWebsTypeGetContentTypesResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetContentTypesResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetContentTypesResponse extends SPWebsWsdlClass
{
	/**
	 * The GetContentTypesResult
	 * @var SPWebsTypeGetContentTypesResult
	 */
	public $GetContentTypesResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetContentTypesResult GetContentTypesResult
	 * @return SPWebsTypeGetContentTypesResponse
	 */
	public function __construct($_GetContentTypesResult = null)
	{
		parent::__construct(array('GetContentTypesResult'=>$_GetContentTypesResult));
	}
	/**
	 * Set GetContentTypesResult
	 * @param GetContentTypesResult GetContentTypesResult
	 * @return GetContentTypesResult
	 */
	public function setGetContentTypesResult($_GetContentTypesResult)
	{
		return ($this->GetContentTypesResult = $_GetContentTypesResult);
	}
	/**
	 * Get GetContentTypesResult
	 * @return SPWebsTypeGetContentTypesResult
	 */
	public function getGetContentTypesResult()
	{
		return $this->GetContentTypesResult;
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