<?php
/**
 * Class file for XiBATSRealTimeTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetTicksResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeTicks GetTicksResult
	 * @return XiBATSRealTimeTypeGetTicksResponse
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
	 * @return XiBATSRealTimeTypeTicks
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