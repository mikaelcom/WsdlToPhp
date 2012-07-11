<?php
/**
 * Class file for XiFundHoldingsTypeOLFund
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeOLFund
 * @date 08/07/2012
 */
class XiFundHoldingsTypeOLFund extends XiFundHoldingsTypeCommon
{
	/**
	 * The FundName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FundName;
	/**
	 * The FundFilingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FundFilingDate;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeArrayOfSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param string FundName
	 * @param string FundFilingDate
	 * @param XiFundHoldingsTypeArrayOfSecurity Security
	 * @return XiFundHoldingsTypeOLFund
	 */
	public function __construct($_FundName = null,$_FundFilingDate = null,$_Security = null)
	{
		XiFundHoldingsWsdlClass::__construct(array('FundName'=>$_FundName,'FundFilingDate'=>$_FundFilingDate,'Security'=>new XiFundHoldingsTypeArrayOfSecurity($_Security)));
	}
	/**
	 * Set FundName
	 * @param string FundName
	 * @return string
	 */
	public function setFundName($_FundName)
	{
		return ($this->FundName = $_FundName);
	}
	/**
	 * Get FundName
	 * @return string
	 */
	public function getFundName()
	{
		return $this->FundName;
	}
	/**
	 * Set FundFilingDate
	 * @param string FundFilingDate
	 * @return string
	 */
	public function setFundFilingDate($_FundFilingDate)
	{
		return ($this->FundFilingDate = $_FundFilingDate);
	}
	/**
	 * Get FundFilingDate
	 * @return string
	 */
	public function getFundFilingDate()
	{
		return $this->FundFilingDate;
	}
	/**
	 * Set Security
	 * @param ArrayOfSecurity Security
	 * @return ArrayOfSecurity
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiFundHoldingsTypeArrayOfSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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