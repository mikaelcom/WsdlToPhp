<?php
/**
 * Class file for SPSearchTypeGetPortalSearchInfoResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeGetPortalSearchInfoResponse
 * @date 06/07/2012
 */
class SPSearchTypeGetPortalSearchInfoResponse extends SPSearchWsdlClass
{
	/**
	 * The GetPortalSearchInfoResult
	 * @var string
	 */
	public $GetPortalSearchInfoResult;
	/**
	 * Constructor
	 * @param string GetPortalSearchInfoResult
	 * @return SPSearchTypeGetPortalSearchInfoResponse
	 */
	public function __construct($_GetPortalSearchInfoResult = null)
	{
		parent::__construct(array('GetPortalSearchInfoResult'=>$_GetPortalSearchInfoResult));
	}
	/**
	 * Set GetPortalSearchInfoResult
	 * @param string GetPortalSearchInfoResult
	 * @return string
	 */
	public function setGetPortalSearchInfoResult($_GetPortalSearchInfoResult)
	{
		return ($this->GetPortalSearchInfoResult = $_GetPortalSearchInfoResult);
	}
	/**
	 * Get GetPortalSearchInfoResult
	 * @return string
	 */
	public function getGetPortalSearchInfoResult()
	{
		return $this->GetPortalSearchInfoResult;
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