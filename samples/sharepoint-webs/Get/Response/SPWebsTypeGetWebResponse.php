<?php
/**
 * Class file for SPWebsTypeGetWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetWebResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetWebResponse extends SPWebsWsdlClass
{
	/**
	 * The GetWebResult
	 * @var SPWebsTypeGetWebResult
	 */
	public $GetWebResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetWebResult GetWebResult
	 * @return SPWebsTypeGetWebResponse
	 */
	public function __construct($_GetWebResult = null)
	{
		parent::__construct(array('GetWebResult'=>$_GetWebResult));
	}
	/**
	 * Set GetWebResult
	 * @param GetWebResult GetWebResult
	 * @return GetWebResult
	 */
	public function setGetWebResult($_GetWebResult)
	{
		return ($this->GetWebResult = $_GetWebResult);
	}
	/**
	 * Get GetWebResult
	 * @return SPWebsTypeGetWebResult
	 */
	public function getGetWebResult()
	{
		return $this->GetWebResult;
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