<?php
/**
 * Class file for SPVersionsTypeGetVersionsResponse
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeGetVersionsResponse
 * @date 06/07/2012
 */
class SPVersionsTypeGetVersionsResponse extends SPVersionsWsdlClass
{
	/**
	 * The GetVersionsResult
	 * @var SPVersionsTypeGetVersionsResult
	 */
	public $GetVersionsResult;
	/**
	 * Constructor
	 * @param SPVersionsTypeGetVersionsResult GetVersionsResult
	 * @return SPVersionsTypeGetVersionsResponse
	 */
	public function __construct($_GetVersionsResult = null)
	{
		parent::__construct(array('GetVersionsResult'=>$_GetVersionsResult));
	}
	/**
	 * Set GetVersionsResult
	 * @param GetVersionsResult GetVersionsResult
	 * @return GetVersionsResult
	 */
	public function setGetVersionsResult($_GetVersionsResult)
	{
		return ($this->GetVersionsResult = $_GetVersionsResult);
	}
	/**
	 * Get GetVersionsResult
	 * @return SPVersionsTypeGetVersionsResult
	 */
	public function getGetVersionsResult()
	{
		return $this->GetVersionsResult;
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