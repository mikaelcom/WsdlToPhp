<?php
/**
 * Class file for SPWebsTypeGetObjectIdFromUrlResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetObjectIdFromUrlResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetObjectIdFromUrlResponse extends SPWebsWsdlClass
{
	/**
	 * The GetObjectIdFromUrlResult
	 * @var SPWebsTypeGetObjectIdFromUrlResult
	 */
	public $GetObjectIdFromUrlResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetObjectIdFromUrlResult GetObjectIdFromUrlResult
	 * @return SPWebsTypeGetObjectIdFromUrlResponse
	 */
	public function __construct($_GetObjectIdFromUrlResult = null)
	{
		parent::__construct(array('GetObjectIdFromUrlResult'=>$_GetObjectIdFromUrlResult));
	}
	/**
	 * Set GetObjectIdFromUrlResult
	 * @param GetObjectIdFromUrlResult GetObjectIdFromUrlResult
	 * @return GetObjectIdFromUrlResult
	 */
	public function setGetObjectIdFromUrlResult($_GetObjectIdFromUrlResult)
	{
		return ($this->GetObjectIdFromUrlResult = $_GetObjectIdFromUrlResult);
	}
	/**
	 * Get GetObjectIdFromUrlResult
	 * @return SPWebsTypeGetObjectIdFromUrlResult
	 */
	public function getGetObjectIdFromUrlResult()
	{
		return $this->GetObjectIdFromUrlResult;
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