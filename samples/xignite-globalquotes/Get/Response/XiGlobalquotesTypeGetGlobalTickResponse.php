<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalTickResponse
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalTickResponse extends XiGlobalquotesWsdlClass
{
	/**
	 * The GetGlobalTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeGlobalTick
	 */
	public $GetGlobalTickResult;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeGlobalTick GetGlobalTickResult
	 * @return XiGlobalquotesTypeGetGlobalTickResponse
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
	 * @return XiGlobalquotesTypeGlobalTick
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