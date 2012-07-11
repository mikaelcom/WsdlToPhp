<?php
/**
 * Class file for XiHoldingsTypeGetHistoricalHoldings
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHistoricalHoldings
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHistoricalHoldings extends XiHoldingsWsdlClass
{
	/**
	 * The ManagerCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ManagerCIK;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string ManagerCIK
	 * @param string AsOfDate
	 * @return XiHoldingsTypeGetHistoricalHoldings
	 */
	public function __construct($_ManagerCIK = null,$_AsOfDate = null)
	{
		parent::__construct(array('ManagerCIK'=>$_ManagerCIK,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set ManagerCIK
	 * @param string ManagerCIK
	 * @return string
	 */
	public function setManagerCIK($_ManagerCIK)
	{
		return ($this->ManagerCIK = $_ManagerCIK);
	}
	/**
	 * Get ManagerCIK
	 * @return string
	 */
	public function getManagerCIK()
	{
		return $this->ManagerCIK;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>