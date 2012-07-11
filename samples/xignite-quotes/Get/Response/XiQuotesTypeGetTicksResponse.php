<?php
/**
 * Class file for XiQuotesTypeGetTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTicksResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetTicksResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTicks
	 */
	public $GetTicksResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks GetTicksResult
	 * @return XiQuotesTypeGetTicksResponse
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
	 * @return XiQuotesTypeTicks
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