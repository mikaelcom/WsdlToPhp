<?php
/**
 * Class file for SPWebsTypeGetCustomizedPageStatusResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetCustomizedPageStatusResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetCustomizedPageStatusResponse extends SPWebsWsdlClass
{
	/**
	 * The GetCustomizedPageStatusResult
	 * @var CustomizedPageStatus
	 */
	public $GetCustomizedPageStatusResult;
	/**
	 * Constructor
	 * @param CustomizedPageStatus GetCustomizedPageStatusResult
	 * @return SPWebsTypeGetCustomizedPageStatusResponse
	 */
	public function __construct($_GetCustomizedPageStatusResult = null)
	{
		parent::__construct(array('GetCustomizedPageStatusResult'=>$_GetCustomizedPageStatusResult));
	}
	/**
	 * Set GetCustomizedPageStatusResult
	 * @param CustomizedPageStatus GetCustomizedPageStatusResult
	 * @return CustomizedPageStatus
	 */
	public function setGetCustomizedPageStatusResult($_GetCustomizedPageStatusResult)
	{
		return ($this->GetCustomizedPageStatusResult = $_GetCustomizedPageStatusResult);
	}
	/**
	 * Get GetCustomizedPageStatusResult
	 * @return CustomizedPageStatus
	 */
	public function getGetCustomizedPageStatusResult()
	{
		return $this->GetCustomizedPageStatusResult;
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