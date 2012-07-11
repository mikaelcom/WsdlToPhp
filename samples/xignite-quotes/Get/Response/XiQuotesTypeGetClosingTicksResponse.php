<?php
/**
 * Class file for XiQuotesTypeGetClosingTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetClosingTicksResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetClosingTicksResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetClosingTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTicks
	 */
	public $GetClosingTicksResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks GetClosingTicksResult
	 * @return XiQuotesTypeGetClosingTicksResponse
	 */
	public function __construct($_GetClosingTicksResult = null)
	{
		parent::__construct(array('GetClosingTicksResult'=>$_GetClosingTicksResult));
	}
	/**
	 * Set GetClosingTicksResult
	 * @param Ticks GetClosingTicksResult
	 * @return Ticks
	 */
	public function setGetClosingTicksResult($_GetClosingTicksResult)
	{
		return ($this->GetClosingTicksResult = $_GetClosingTicksResult);
	}
	/**
	 * Get GetClosingTicksResult
	 * @return XiQuotesTypeTicks
	 */
	public function getGetClosingTicksResult()
	{
		return $this->GetClosingTicksResult;
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