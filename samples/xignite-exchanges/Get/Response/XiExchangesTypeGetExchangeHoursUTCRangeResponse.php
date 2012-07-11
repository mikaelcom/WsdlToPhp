<?php
/**
 * Class file for XiExchangesTypeGetExchangeHoursUTCRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeHoursUTCRangeResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeHoursUTCRangeResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeHoursUTCRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchangeHours
	 */
	public $GetExchangeHoursUTCRangeResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchangeHours GetExchangeHoursUTCRangeResult
	 * @return XiExchangesTypeGetExchangeHoursUTCRangeResponse
	 */
	public function __construct($_GetExchangeHoursUTCRangeResult = null)
	{
		parent::__construct(array('GetExchangeHoursUTCRangeResult'=>new XiExchangesTypeArrayOfExchangeHours($_GetExchangeHoursUTCRangeResult)));
	}
	/**
	 * Set GetExchangeHoursUTCRangeResult
	 * @param ArrayOfExchangeHours GetExchangeHoursUTCRangeResult
	 * @return ArrayOfExchangeHours
	 */
	public function setGetExchangeHoursUTCRangeResult($_GetExchangeHoursUTCRangeResult)
	{
		return ($this->GetExchangeHoursUTCRangeResult = $_GetExchangeHoursUTCRangeResult);
	}
	/**
	 * Get GetExchangeHoursUTCRangeResult
	 * @return XiExchangesTypeArrayOfExchangeHours
	 */
	public function getGetExchangeHoursUTCRangeResult()
	{
		return $this->GetExchangeHoursUTCRangeResult;
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