<?php
/**
 * Class file for XiRealTimeTypeGetBookResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetBookResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetBookResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetBookResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeBook
	 */
	public $GetBookResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeBook GetBookResult
	 * @return XiRealTimeTypeGetBookResponse
	 */
	public function __construct($_GetBookResult = null)
	{
		parent::__construct(array('GetBookResult'=>$_GetBookResult));
	}
	/**
	 * Set GetBookResult
	 * @param Book GetBookResult
	 * @return Book
	 */
	public function setGetBookResult($_GetBookResult)
	{
		return ($this->GetBookResult = $_GetBookResult);
	}
	/**
	 * Get GetBookResult
	 * @return XiRealTimeTypeBook
	 */
	public function getGetBookResult()
	{
		return $this->GetBookResult;
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