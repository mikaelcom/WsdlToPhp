<?php
/**
 * Class file for XiHoldingsTypeGetLatestHoldings
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetLatestHoldings
 * @date 08/07/2012
 */
class XiHoldingsTypeGetLatestHoldings extends XiHoldingsWsdlClass
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
	 * Constructor
	 * @param string ManagerCIK
	 * @return XiHoldingsTypeGetLatestHoldings
	 */
	public function __construct($_ManagerCIK = null)
	{
		parent::__construct(array('ManagerCIK'=>$_ManagerCIK));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>