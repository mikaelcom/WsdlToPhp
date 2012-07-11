<?php
/**
 * Class file for XiHoldingsTypeGetTopHoldings
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetTopHoldings
 * @date 08/07/2012
 */
class XiHoldingsTypeGetTopHoldings extends XiHoldingsWsdlClass
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
	 * The TopCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TopCount;
	/**
	 * Constructor
	 * @param string ManagerCIK
	 * @param int TopCount
	 * @return XiHoldingsTypeGetTopHoldings
	 */
	public function __construct($_ManagerCIK = null,$_TopCount)
	{
		parent::__construct(array('ManagerCIK'=>$_ManagerCIK,'TopCount'=>$_TopCount));
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
	 * Set TopCount
	 * @param int TopCount
	 * @return int
	 */
	public function setTopCount($_TopCount)
	{
		return ($this->TopCount = $_TopCount);
	}
	/**
	 * Get TopCount
	 * @return int
	 */
	public function getTopCount()
	{
		return $this->TopCount;
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