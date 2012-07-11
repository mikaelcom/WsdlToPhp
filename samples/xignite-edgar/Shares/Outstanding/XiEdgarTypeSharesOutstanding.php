<?php
/**
 * Class file for XiEdgarTypeSharesOutstanding
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSharesOutstanding
 * @date 08/07/2012
 */
class XiEdgarTypeSharesOutstanding extends XiEdgarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSecurity
	 */
	public $Security;
	/**
	 * The TotalDocuments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalDocuments;
	/**
	 * The ExtractedDocuments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ExtractedDocuments;
	/**
	 * The PercentageSuccess
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageSuccess;
	/**
	 * The Shares
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfSharesAsOf
	 */
	public $Shares;
	/**
	 * Constructor
	 * @param XiEdgarTypeSecurity Security
	 * @param int TotalDocuments
	 * @param int ExtractedDocuments
	 * @param double PercentageSuccess
	 * @param XiEdgarTypeArrayOfSharesAsOf Shares
	 * @return XiEdgarTypeSharesOutstanding
	 */
	public function __construct($_Security = null,$_TotalDocuments,$_ExtractedDocuments,$_PercentageSuccess,$_Shares = null)
	{
		XiEdgarWsdlClass::__construct(array('Security'=>$_Security,'TotalDocuments'=>$_TotalDocuments,'ExtractedDocuments'=>$_ExtractedDocuments,'PercentageSuccess'=>$_PercentageSuccess,'Shares'=>new XiEdgarTypeArrayOfSharesAsOf($_Shares)));
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
	 * @return XiEdgarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set TotalDocuments
	 * @param int TotalDocuments
	 * @return int
	 */
	public function setTotalDocuments($_TotalDocuments)
	{
		return ($this->TotalDocuments = $_TotalDocuments);
	}
	/**
	 * Get TotalDocuments
	 * @return int
	 */
	public function getTotalDocuments()
	{
		return $this->TotalDocuments;
	}
	/**
	 * Set ExtractedDocuments
	 * @param int ExtractedDocuments
	 * @return int
	 */
	public function setExtractedDocuments($_ExtractedDocuments)
	{
		return ($this->ExtractedDocuments = $_ExtractedDocuments);
	}
	/**
	 * Get ExtractedDocuments
	 * @return int
	 */
	public function getExtractedDocuments()
	{
		return $this->ExtractedDocuments;
	}
	/**
	 * Set PercentageSuccess
	 * @param double PercentageSuccess
	 * @return double
	 */
	public function setPercentageSuccess($_PercentageSuccess)
	{
		return ($this->PercentageSuccess = $_PercentageSuccess);
	}
	/**
	 * Get PercentageSuccess
	 * @return double
	 */
	public function getPercentageSuccess()
	{
		return $this->PercentageSuccess;
	}
	/**
	 * Set Shares
	 * @param ArrayOfSharesAsOf Shares
	 * @return ArrayOfSharesAsOf
	 */
	public function setShares($_Shares)
	{
		return ($this->Shares = $_Shares);
	}
	/**
	 * Get Shares
	 * @return XiEdgarTypeArrayOfSharesAsOf
	 */
	public function getShares()
	{
		return $this->Shares;
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