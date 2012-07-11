<?php
/**
 * Class file for PPInvoiceTypeDateRangeType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeDateRangeType
 * Documentation : Determines an inclusive date range.
 * @date 02/07/2012
 */
class PPInvoiceTypeDateRangeType extends PPInvoiceWsdlClass
{
	/**
	 * The startDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Start of the date range.
	 * @var dateTime
	 */
	public $startDate;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : End of the date range.
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * Constructor
	 * @param dateTime startDate
	 * @param dateTime endDate
	 * @return PPInvoiceTypeDateRangeType
	 */
	public function __construct($_startDate = null,$_endDate = null)
	{
		parent::__construct(array('startDate'=>$_startDate,'endDate'=>$_endDate));
	}
	/**
	 * Set startDate
	 * @param dateTime startDate
	 * @return dateTime
	 */
	public function setStartDate($_startDate)
	{
		return ($this->startDate = $_startDate);
	}
	/**
	 * Get startDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}
	/**
	 * Set endDate
	 * @param dateTime endDate
	 * @return dateTime
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->endDate;
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