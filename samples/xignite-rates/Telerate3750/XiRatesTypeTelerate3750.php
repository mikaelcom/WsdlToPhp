<?php
/**
 * Class file for XiRatesTypeTelerate3750
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeTelerate3750
 * @date 08/07/2012
 */
class XiRatesTypeTelerate3750 extends XiRatesTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Columns
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfTelerate3750Column
	 */
	public $Columns;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiRatesTypeArrayOfTelerate3750Column Columns
	 * @return XiRatesTypeTelerate3750
	 */
	public function __construct($_AsOfDate = null,$_Columns = null)
	{
		XiRatesWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'Columns'=>new XiRatesTypeArrayOfTelerate3750Column($_Columns)));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set Columns
	 * @param ArrayOfTelerate3750Column Columns
	 * @return ArrayOfTelerate3750Column
	 */
	public function setColumns($_Columns)
	{
		return ($this->Columns = $_Columns);
	}
	/**
	 * Get Columns
	 * @return XiRatesTypeArrayOfTelerate3750Column
	 */
	public function getColumns()
	{
		return $this->Columns;
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