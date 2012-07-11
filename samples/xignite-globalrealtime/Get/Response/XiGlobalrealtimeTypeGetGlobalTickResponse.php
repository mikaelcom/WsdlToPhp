<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalTickResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalTickResponse extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GetGlobalTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeGlobalTick
	 */
	public $GetGlobalTickResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeGlobalTick GetGlobalTickResult
	 * @return XiGlobalrealtimeTypeGetGlobalTickResponse
	 */
	public function __construct($_GetGlobalTickResult = null)
	{
		parent::__construct(array('GetGlobalTickResult'=>$_GetGlobalTickResult));
	}
	/**
	 * Set GetGlobalTickResult
	 * @param GlobalTick GetGlobalTickResult
	 * @return GlobalTick
	 */
	public function setGetGlobalTickResult($_GetGlobalTickResult)
	{
		return ($this->GetGlobalTickResult = $_GetGlobalTickResult);
	}
	/**
	 * Get GetGlobalTickResult
	 * @return XiGlobalrealtimeTypeGlobalTick
	 */
	public function getGetGlobalTickResult()
	{
		return $this->GetGlobalTickResult;
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