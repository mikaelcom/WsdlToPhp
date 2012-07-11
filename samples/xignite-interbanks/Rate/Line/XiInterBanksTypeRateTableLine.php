<?php
/**
 * Class file for XiInterBanksTypeRateTableLine
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeRateTableLine
 * @date 08/07/2012
 */
class XiInterBanksTypeRateTableLine extends XiInterBanksTypeCommon
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTypes
	 */
	public $RateType;
	/**
	 * The RateTableCells
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfRateTableCell
	 */
	public $RateTableCells;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTypes RateType
	 * @param XiInterBanksTypeArrayOfRateTableCell RateTableCells
	 * @return XiInterBanksTypeRateTableLine
	 */
	public function __construct($_RateType,$_RateTableCells = null)
	{
		XiInterBanksWsdlClass::__construct(array('RateType'=>$_RateType,'RateTableCells'=>new XiInterBanksTypeArrayOfRateTableCell($_RateTableCells)));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiInterBanksTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiInterBanksTypeRateTypes
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
	 * @return XiInterBanksTypeArrayOfRateTableCell
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