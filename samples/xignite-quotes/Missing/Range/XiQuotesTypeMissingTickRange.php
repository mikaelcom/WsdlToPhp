<?php
/**
 * Class file for XiQuotesTypeMissingTickRange
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeMissingTickRange
 * @date 08/07/2012
 */
class XiQuotesTypeMissingTickRange extends XiQuotesTypeCommon
{
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * Constructor
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function __construct($_StartTime,$_EndTime)
	{
		XiQuotesWsdlClass::__construct(array('StartTime'=>$_StartTime,'EndTime'=>$_EndTime));
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
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