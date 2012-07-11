<?php
/**
 * Class file for XiFundHoldingsTypeOLFundHoldings
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeOLFundHoldings
 * @date 08/07/2012
 */
class XiFundHoldingsTypeOLFundHoldings extends XiFundHoldingsTypeCommon
{
	/**
	 * The OLFund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeOLFund
	 */
	public $OLFund;
	/**
	 * The Filing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeShortFiling
	 */
	public $Filing;
	/**
	 * The OLHoldings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeArrayOfOLHolding
	 */
	public $OLHoldings;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFund OLFund
	 * @param XiFundHoldingsTypeShortFiling Filing
	 * @param XiFundHoldingsTypeArrayOfOLHolding OLHoldings
	 * @return XiFundHoldingsTypeOLFundHoldings
	 */
	public function __construct($_OLFund = null,$_Filing = null,$_OLHoldings = null)
	{
		XiFundHoldingsWsdlClass::__construct(array('OLFund'=>$_OLFund,'Filing'=>$_Filing,'OLHoldings'=>new XiFundHoldingsTypeArrayOfOLHolding($_OLHoldings)));
	}
	/**
	 * Set OLFund
	 * @param OLFund OLFund
	 * @return OLFund
	 */
	public function setOLFund($_OLFund)
	{
		return ($this->OLFund = $_OLFund);
	}
	/**
	 * Get OLFund
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function getOLFund()
	{
		return $this->OLFund;
	}
	/**
	 * Set Filing
	 * @param ShortFiling Filing
	 * @return ShortFiling
	 */
	public function setFiling($_Filing)
	{
		return ($this->Filing = $_Filing);
	}
	/**
	 * Get Filing
	 * @return XiFundHoldingsTypeShortFiling
	 */
	public function getFiling()
	{
		return $this->Filing;
	}
	/**
	 * Set OLHoldings
	 * @param ArrayOfOLHolding OLHoldings
	 * @return ArrayOfOLHolding
	 */
	public function setOLHoldings($_OLHoldings)
	{
		return ($this->OLHoldings = $_OLHoldings);
	}
	/**
	 * Get OLHoldings
	 * @return XiFundHoldingsTypeArrayOfOLHolding
	 */
	public function getOLHoldings()
	{
		return $this->OLHoldings;
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