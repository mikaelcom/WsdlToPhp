<?php
/**
 * Class file for XiQuotesTypeGetClosingTicksAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetClosingTicksAsOfDateResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetClosingTicksAsOfDateResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetClosingTicksAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTicks
	 */
	public $GetClosingTicksAsOfDateResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeTicks GetClosingTicksAsOfDateResult
	 * @return XiQuotesTypeGetClosingTicksAsOfDateResponse
	 */
	public function __construct($_GetClosingTicksAsOfDateResult = null)
	{
		parent::__construct(array('GetClosingTicksAsOfDateResult'=>$_GetClosingTicksAsOfDateResult));
	}
	/**
	 * Set GetClosingTicksAsOfDateResult
	 * @param Ticks GetClosingTicksAsOfDateResult
	 * @return Ticks
	 */
	public function setGetClosingTicksAsOfDateResult($_GetClosingTicksAsOfDateResult)
	{
		return ($this->GetClosingTicksAsOfDateResult = $_GetClosingTicksAsOfDateResult);
	}
	/**
	 * Get GetClosingTicksAsOfDateResult
	 * @return XiQuotesTypeTicks
	 */
	public function getGetClosingTicksAsOfDateResult()
	{
		return $this->GetClosingTicksAsOfDateResult;
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