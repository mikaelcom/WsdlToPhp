<?php
/**
 * Class file for XiQuotesTypeGetTickResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTickResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTickResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTickResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeSingleTick
	 */
	public $GetTickResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeSingleTick GetTickResult
	 * @return XiQuotesTypeGetTickResponse
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
	 * @return XiQuotesTypeSingleTick
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