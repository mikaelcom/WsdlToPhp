<?php
/**
 * Class file for XiFundsTypeFundNAVs
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeFundNAVs
 * @date 08/07/2012
 */
class XiFundsTypeFundNAVs extends XiFundsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeSecurity
	 */
	public $Security;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The NAVs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfFundNAV
	 */
	public $NAVs;
	/**
	 * Constructor
	 * @param XiFundsTypeSecurity Security
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiFundsTypeArrayOfFundNAV NAVs
	 * @return XiFundsTypeFundNAVs
	 */
	public function __construct($_Security = null,$_StartDate = null,$_EndDate = null,$_NAVs = null)
	{
		XiFundsWsdlClass::__construct(array('Security'=>$_Security,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'NAVs'=>new XiFundsTypeArrayOfFundNAV($_NAVs)));
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
	 * @return XiFundsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set NAVs
	 * @param ArrayOfFundNAV NAVs
	 * @return ArrayOfFundNAV
	 */
	public function setNAVs($_NAVs)
	{
		return ($this->NAVs = $_NAVs);
	}
	/**
	 * Get NAVs
	 * @return XiFundsTypeArrayOfFundNAV
	 */
	public function getNAVs()
	{
		return $this->NAVs;
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