<?php
/**
 * Class file for XiMetalsTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetTicksResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeTicks GetTicksResult
	 * @return XiMetalsTypeGetTicksResponse
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
	 * @return XiMetalsTypeTicks
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