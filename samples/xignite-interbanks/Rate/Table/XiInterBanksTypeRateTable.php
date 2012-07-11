<?php
/**
 * Class file for XiInterBanksTypeRateTable
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeRateTable
 * @date 08/07/2012
 */
class XiInterBanksTypeRateTable extends XiInterBanksTypeCommon
{
	/**
	 * The RateTableLines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfRateTableLine
	 */
	public $RateTableLines;
	/**
	 * Constructor
	 * @param XiInterBanksTypeArrayOfRateTableLine RateTableLines
	 * @return XiInterBanksTypeRateTable
	 */
	public function __construct($_RateTableLines = null)
	{
		XiInterBanksWsdlClass::__construct(array('RateTableLines'=>new XiInterBanksTypeArrayOfRateTableLine($_RateTableLines)));
	}
	/**
	 * Set RateTableLines
	 * @param ArrayOfRateTableLine RateTableLines
	 * @return ArrayOfRateTableLine
	 */
	public function setRateTableLines($_RateTableLines)
	{
		return ($this->RateTableLines = $_RateTableLines);
	}
	/**
	 * Get RateTableLines
	 * @return XiInterBanksTypeArrayOfRateTableLine
	 */
	public function getRateTableLines()
	{
		return $this->RateTableLines;
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