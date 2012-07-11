<?php
/**
 * Class file for SPWebsTypeGetColumnsResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetColumnsResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetColumnsResponse extends SPWebsWsdlClass
{
	/**
	 * The GetColumnsResult
	 * @var SPWebsTypeGetColumnsResult
	 */
	public $GetColumnsResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetColumnsResult GetColumnsResult
	 * @return SPWebsTypeGetColumnsResponse
	 */
	public function __construct($_GetColumnsResult = null)
	{
		parent::__construct(array('GetColumnsResult'=>$_GetColumnsResult));
	}
	/**
	 * Set GetColumnsResult
	 * @param GetColumnsResult GetColumnsResult
	 * @return GetColumnsResult
	 */
	public function setGetColumnsResult($_GetColumnsResult)
	{
		return ($this->GetColumnsResult = $_GetColumnsResult);
	}
	/**
	 * Get GetColumnsResult
	 * @return SPWebsTypeGetColumnsResult
	 */
	public function getGetColumnsResult()
	{
		return $this->GetColumnsResult;
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