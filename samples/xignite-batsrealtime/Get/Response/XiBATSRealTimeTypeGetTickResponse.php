<?php
/**
 * Class file for XiBATSRealTimeTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetTickResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetTickResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeSingleTick GetTickResult
	 * @return XiBATSRealTimeTypeGetTickResponse
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
	 * @return XiBATSRealTimeTypeSingleTick
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