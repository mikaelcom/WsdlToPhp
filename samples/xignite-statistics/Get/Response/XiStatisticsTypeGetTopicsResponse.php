<?php
/**
 * Class file for XiStatisticsTypeGetTopicsResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicsResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicsResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetTopicsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeCategory
	 */
	public $GetTopicsResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeCategory GetTopicsResult
	 * @return XiStatisticsTypeGetTopicsResponse
	 */
	public function __construct($_GetTopicsResult = null)
	{
		parent::__construct(array('GetTopicsResult'=>$_GetTopicsResult));
	}
	/**
	 * Set GetTopicsResult
	 * @param Category GetTopicsResult
	 * @return Category
	 */
	public function setGetTopicsResult($_GetTopicsResult)
	{
		return ($this->GetTopicsResult = $_GetTopicsResult);
	}
	/**
	 * Get GetTopicsResult
	 * @return XiStatisticsTypeCategory
	 */
	public function getGetTopicsResult()
	{
		return $this->GetTopicsResult;
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