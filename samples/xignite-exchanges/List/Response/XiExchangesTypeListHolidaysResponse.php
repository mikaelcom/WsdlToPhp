<?php
/**
 * Class file for XiExchangesTypeListHolidaysResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeListHolidaysResponse
 * @date 08/07/2012
 */
class XiExchangesTypeListHolidaysResponse extends XiExchangesWsdlClass
{
	/**
	 * The ListHolidaysResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeArrayOfExchangeHoliday
	 */
	public $ListHolidaysResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeArrayOfExchangeHoliday ListHolidaysResult
	 * @return XiExchangesTypeListHolidaysResponse
	 */
	public function __construct($_ListHolidaysResult = null)
	{
		parent::__construct(array('ListHolidaysResult'=>new XiExchangesTypeArrayOfExchangeHoliday($_ListHolidaysResult)));
	}
	/**
	 * Set ListHolidaysResult
	 * @param ArrayOfExchangeHoliday ListHolidaysResult
	 * @return ArrayOfExchangeHoliday
	 */
	public function setListHolidaysResult($_ListHolidaysResult)
	{
		return ($this->ListHolidaysResult = $_ListHolidaysResult);
	}
	/**
	 * Get ListHolidaysResult
	 * @return XiExchangesTypeArrayOfExchangeHoliday
	 */
	public function getListHolidaysResult()
	{
		return $this->ListHolidaysResult;
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