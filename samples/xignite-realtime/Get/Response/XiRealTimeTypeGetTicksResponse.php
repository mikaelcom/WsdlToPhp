<?php
/**
 * Class file for XiRealTimeTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetTicksResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTicks GetTicksResult
	 * @return XiRealTimeTypeGetTicksResponse
	 */
	public function __construct($_GetTicksResult = null)
	{
		parent::__construct(array('GetTicksResult'=>$_GetTicksResult));
	}
	/**
	 * Set GetTicksResult
	 * @param Ticks GetTicksResult
	 * @return Ticks
	 */
	public function setGetTicksResult($_GetTicksResult)
	{
		return ($this->GetTicksResult = $_GetTicksResult);
	}
	/**
	 * Get GetTicksResult
	 * @return XiRealTimeTypeTicks
	 */
	public function getGetTicksResult()
	{
		return $this->GetTicksResult;
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