<?php
/**
 * Class file for PayPalTypeBMButtonSearchRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMButtonSearchRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMButtonSearchRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The earliest transaction date at which to start the search. No wildcards are allowed. Required
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The latest transaction date to be included in the search Optional
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * Constructor
	 * @param dateTime StartDate
	 * @param dateTime EndDate
	 * @return PayPalTypeBMButtonSearchRequestType
	 */
	public function __construct($_StartDate = null,$_EndDate = null)
	{
		PayPalWsdlClass::__construct(array('StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set StartDate
	 * @param dateTime StartDate
	 * @return dateTime
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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