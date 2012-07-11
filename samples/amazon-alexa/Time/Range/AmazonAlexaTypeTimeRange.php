<?php
/**
 * Class file for AmazonAlexaTypeTimeRange
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeTimeRange
 * @date 10/07/2012
 */
class AmazonAlexaTypeTimeRange extends AmazonAlexaWsdlClass
{
	/**
	 * The Days
	 * @var UnsignedIntegerType
	 */
	public $Days;
	/**
	 * The Months
	 * @var UnsignedIntegerType
	 */
	public $Months;
	/**
	 * Constructor
	 * @param UnsignedIntegerType Days
	 * @param UnsignedIntegerType Months
	 * @return AmazonAlexaTypeTimeRange
	 */
	public function __construct($_Days = null,$_Months = null)
	{
		parent::__construct(array('Days'=>$_Days,'Months'=>$_Months));
	}
	/**
	 * Set Days
	 * @param UnsignedIntegerType Days
	 * @return UnsignedIntegerType
	 */
	public function setDays($_Days)
	{
		return ($this->Days = $_Days);
	}
	/**
	 * Get Days
	 * @return UnsignedIntegerType
	 */
	public function getDays()
	{
		return $this->Days;
	}
	/**
	 * Set Months
	 * @param UnsignedIntegerType Months
	 * @return UnsignedIntegerType
	 */
	public function setMonths($_Months)
	{
		return ($this->Months = $_Months);
	}
	/**
	 * Get Months
	 * @return UnsignedIntegerType
	 */
	public function getMonths()
	{
		return $this->Months;
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