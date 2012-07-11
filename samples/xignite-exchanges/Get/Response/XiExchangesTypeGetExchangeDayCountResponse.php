<?php
/**
 * Class file for XiExchangesTypeGetExchangeDayCountResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeDayCountResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeDayCountResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeDayCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeDayCount
	 */
	public $GetExchangeDayCountResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeDayCount GetExchangeDayCountResult
	 * @return XiExchangesTypeGetExchangeDayCountResponse
	 */
	public function __construct($_GetExchangeDayCountResult = null)
	{
		parent::__construct(array('GetExchangeDayCountResult'=>$_GetExchangeDayCountResult));
	}
	/**
	 * Set GetExchangeDayCountResult
	 * @param DayCount GetExchangeDayCountResult
	 * @return DayCount
	 */
	public function setGetExchangeDayCountResult($_GetExchangeDayCountResult)
	{
		return ($this->GetExchangeDayCountResult = $_GetExchangeDayCountResult);
	}
	/**
	 * Get GetExchangeDayCountResult
	 * @return XiExchangesTypeDayCount
	 */
	public function getGetExchangeDayCountResult()
	{
		return $this->GetExchangeDayCountResult;
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