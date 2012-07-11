<?php
/**
 * Class file for XiRealTimeTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetTickResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetTickResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeSingleTick GetTickResult
	 * @return XiRealTimeTypeGetTickResponse
	 */
	public function __construct($_GetTickResult = null)
	{
		parent::__construct(array('GetTickResult'=>$_GetTickResult));
	}
	/**
	 * Set GetTickResult
	 * @param SingleTick GetTickResult
	 * @return SingleTick
	 */
	public function setGetTickResult($_GetTickResult)
	{
		return ($this->GetTickResult = $_GetTickResult);
	}
	/**
	 * Get GetTickResult
	 * @return XiRealTimeTypeSingleTick
	 */
	public function getGetTickResult()
	{
		return $this->GetTickResult;
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