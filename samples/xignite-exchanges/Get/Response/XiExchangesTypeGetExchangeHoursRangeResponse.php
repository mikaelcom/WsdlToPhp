<?php
/**
 * Class file for XiExchangesTypeGetExchangeHoursRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHoursRangeResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHoursRangeResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeHoursRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchangeHours
	 */
	public $GetExchangeHoursRangeResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchangeHours GetExchangeHoursRangeResult
	 * @return XiExchangesTypeGetExchangeHoursRangeResponse
	 */
	public function __construct($_GetExchangeHoursRangeResult = null)
	{
		parent::__construct(array('GetExchangeHoursRangeResult'=>new XiExchangesTypeArrayOfExchangeHours($_GetExchangeHoursRangeResult)));
	}
	/**
	 * Set GetExchangeHoursRangeResult
	 * @param ArrayOfExchangeHours GetExchangeHoursRangeResult
	 * @return ArrayOfExchangeHours
	 */
	public function setGetExchangeHoursRangeResult($_GetExchangeHoursRangeResult)
	{
		return ($this->GetExchangeHoursRangeResult = $_GetExchangeHoursRangeResult);
	}
	/**
	 * Get GetExchangeHoursRangeResult
	 * @return XiExchangesTypeArrayOfExchangeHours
	 */
	public function getGetExchangeHoursRangeResult()
	{
		return $this->GetExchangeHoursRangeResult;
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