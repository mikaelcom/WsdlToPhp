<?php
/**
 * Class file for XiFundHoldingsTypeOLHolding
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeOLHolding
 * @date 08/07/2012
 */
class XiFundHoldingsTypeOLHolding extends XiFundHoldingsWsdlClass
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The EquityName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EquityName;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
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
	 * The PercentOfFund
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentOfFund;
	/**
	 * The YTDReturn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YTDReturn;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeSecurity Security
	 * @param string EquityName
	 * @param string CUSIP
	 * @param string HoldingBeginDate
	 * @param double Cost
	 * @param double Shares
	 * @param double PercentOfFund
	 * @param string YTDReturn
	 * @return XiFundHoldingsTypeOLHolding
	 */
	public function __construct($_Security = null,$_EquityName = null,$_CUSIP = null,$_HoldingBeginDate = null,$_Cost,$_Shares,$_PercentOfFund,$_YTDReturn = null)
	{
		parent::__construct(array('Security'=>$_Security,'EquityName'=>$_EquityName,'CUSIP'=>$_CUSIP,'HoldingBeginDate'=>$_HoldingBeginDate,'Cost'=>$_Cost,'Shares'=>$_Shares,'PercentOfFund'=>$_PercentOfFund,'YTDReturn'=>$_YTDReturn));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set EquityName
	 * @param string EquityName
	 * @return string
	 */
	public function setEquityName($_EquityName)
	{
		return ($this->EquityName = $_EquityName);
	}
	/**
	 * Get EquityName
	 * @return string
	 */
	public function getEquityName()
	{
		return $this->EquityName;
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
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
	 * Set PercentOfFund
	 * @param double PercentOfFund
	 * @return double
	 */
	public function setPercentOfFund($_PercentOfFund)
	{
		return ($this->PercentOfFund = $_PercentOfFund);
	}
	/**
	 * Get PercentOfFund
	 * @return double
	 */
	public function getPercentOfFund()
	{
		return $this->PercentOfFund;
	}
	/**
	 * Set YTDReturn
	 * @param string YTDReturn
	 * @return string
	 */
	public function setYTDReturn($_YTDReturn)
	{
		return ($this->YTDReturn = $_YTDReturn);
	}
	/**
	 * Get YTDReturn
	 * @return string
	 */
	public function getYTDReturn()
	{
		return $this->YTDReturn;
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