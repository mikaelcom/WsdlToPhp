<?php
/**
 * Class file for XiRatesTypeRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeRateTableLine
 * @date 08/07/2012
 */
class XiRatesTypeRateTableLine extends XiRatesTypeCommon
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * The RateTableCells
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateTableCell
	 */
	public $RateTableCells;
	/**
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @param XiRatesTypeArrayOfRateTableCell RateTableCells
	 * @return XiRatesTypeRateTableLine
	 */
	public function __construct($_RateType,$_RateTableCells = null)
	{
		XiRatesWsdlClass::__construct(array('RateType'=>$_RateType,'RateTableCells'=>new XiRatesTypeArrayOfRateTableCell($_RateTableCells)));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set RateTableCells
	 * @param ArrayOfRateTableCell RateTableCells
	 * @return ArrayOfRateTableCell
	 */
	public function setRateTableCells($_RateTableCells)
	{
		return ($this->RateTableCells = $_RateTableCells);
	}
	/**
	 * Get RateTableCells
	 * @return XiRatesTypeArrayOfRateTableCell
	 */
	public function getRateTableCells()
	{
		return $this->RateTableCells;
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