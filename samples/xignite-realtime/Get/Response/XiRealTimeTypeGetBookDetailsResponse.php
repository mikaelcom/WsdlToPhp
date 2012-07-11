<?php
/**
 * Class file for XiRealTimeTypeGetBookDetailsResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetBookDetailsResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetBookDetailsResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetBookDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeDetailedBook
	 */
	public $GetBookDetailsResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeDetailedBook GetBookDetailsResult
	 * @return XiRealTimeTypeGetBookDetailsResponse
	 */
	public function __construct($_GetBookDetailsResult = null)
	{
		parent::__construct(array('GetBookDetailsResult'=>$_GetBookDetailsResult));
	}
	/**
	 * Set GetBookDetailsResult
	 * @param DetailedBook GetBookDetailsResult
	 * @return DetailedBook
	 */
	public function setGetBookDetailsResult($_GetBookDetailsResult)
	{
		return ($this->GetBookDetailsResult = $_GetBookDetailsResult);
	}
	/**
	 * Get GetBookDetailsResult
	 * @return XiRealTimeTypeDetailedBook
	 */
	public function getGetBookDetailsResult()
	{
		return $this->GetBookDetailsResult;
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