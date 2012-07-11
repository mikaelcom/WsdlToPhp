<?php
/**
 * Class file for XiFundHoldingsTypeOLHolder
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeOLHolder
 * @date 08/07/2012
 */
class XiFundHoldingsTypeOLHolder extends XiFundHoldingsWsdlClass
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
	 * The HoldingBeginDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HoldingBeginDate;
	/**
	 * The Cost
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Cost;
	/**
	 * The Shares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Shares;
	/**
	 * The PercentofShares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentofShares;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeOLFund OLFund
	 * @param string HoldingBeginDate
	 * @param double Cost
	 * @param double Shares
	 * @param double PercentofShares
	 * @return XiFundHoldingsTypeOLHolder
	 */
	public function __construct($_OLFund = null,$_HoldingBeginDate = null,$_Cost,$_Shares,$_PercentofShares)
	{
		parent::__construct(array('OLFund'=>$_OLFund,'HoldingBeginDate'=>$_HoldingBeginDate,'Cost'=>$_Cost,'Shares'=>$_Shares,'PercentofShares'=>$_PercentofShares));
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
	 * Set HoldingBeginDate
	 * @param string HoldingBeginDate
	 * @return string
	 */
	public function setHoldingBeginDate($_HoldingBeginDate)
	{
		return ($this->HoldingBeginDate = $_HoldingBeginDate);
	}
	/**
	 * Get HoldingBeginDate
	 * @return string
	 */
	public function getHoldingBeginDate()
	{
		return $this->HoldingBeginDate;
	}
	/**
	 * Set Cost
	 * @param double Cost
	 * @return double
	 */
	public function setCost($_Cost)
	{
		return ($this->Cost = $_Cost);
	}
	/**
	 * Get Cost
	 * @return double
	 */
	public function getCost()
	{
		return $this->Cost;
	}
	/**
	 * Set Shares
	 * @param double Shares
	 * @return double
	 */
	public function setShares($_Shares)
	{
		return ($this->Shares = $_Shares);
	}
	/**
	 * Get Shares
	 * @return double
	 */
	public function getShares()
	{
		return $this->Shares;
	}
	/**
	 * Set PercentofShares
	 * @param double PercentofShares
	 * @return double
	 */
	public function setPercentofShares($_PercentofShares)
	{
		return ($this->PercentofShares = $_PercentofShares);
	}
	/**
	 * Get PercentofShares
	 * @return double
	 */
	public function getPercentofShares()
	{
		return $this->PercentofShares;
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