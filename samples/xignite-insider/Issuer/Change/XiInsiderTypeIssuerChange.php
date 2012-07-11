<?php
/**
 * Class file for XiInsiderTypeIssuerChange
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuerChange
 * @date 08/07/2012
 */
class XiInsiderTypeIssuerChange extends XiInsiderTypeCommon
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Transactions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Transactions;
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
	 * Constructor
	 * @param string CIK
	 * @param int Transactions
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiInsiderTypeIssuerChange
	 */
	public function __construct($_CIK = null,$_Transactions,$_StartDate = null,$_EndDate = null)
	{
		XiInsiderWsdlClass::__construct(array('CIK'=>$_CIK,'Transactions'=>$_Transactions,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
	}
	/**
	 * Set Transactions
	 * @param int Transactions
	 * @return int
	 */
	public function setTransactions($_Transactions)
	{
		return ($this->Transactions = $_Transactions);
	}
	/**
	 * Get Transactions
	 * @return int
	 */
	public function getTransactions()
	{
		return $this->Transactions;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>