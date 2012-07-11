<?php
/**
 * Class file for XiMetalsTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetTickResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetTickResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeSingleTick GetTickResult
	 * @return XiMetalsTypeGetTickResponse
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
	 * @return XiMetalsTypeSingleTick
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