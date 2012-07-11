<?php
/**
 * Class file for XiInsiderTypeGetAllInsiderTransactions
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetAllInsiderTransactions
 * @date 08/07/2012
 */
class XiInsiderTypeGetAllInsiderTransactions extends XiInsiderWsdlClass
{
	/**
	 * The InsiderCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderCIK;
	/**
	 * The InsiderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderName;
	/**
	 * The InsiderAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderAddress;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * The TransactionCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeTransactionCodes
	 */
	public $TransactionCode;
	/**
	 * The SecurityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurityTypes
	 */
	public $SecurityType;
	/**
	 * The OwnershipType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipTypes
	 */
	public $OwnershipType;
	/**
	 * Constructor
	 * @param string InsiderCIK
	 * @param string InsiderName
	 * @param string InsiderAddress
	 * @param string FromDate
	 * @param string ToDate
	 * @param XiInsiderTypeTransactionCodes TransactionCode
	 * @param XiInsiderTypeSecurityTypes SecurityType
	 * @param XiInsiderTypeOwnershipTypes OwnershipType
	 * @return XiInsiderTypeGetAllInsiderTransactions
	 */
	public function __construct($_InsiderCIK = null,$_InsiderName = null,$_InsiderAddress = null,$_FromDate = null,$_ToDate = null,$_TransactionCode,$_SecurityType,$_OwnershipType)
	{
		parent::__construct(array('InsiderCIK'=>$_InsiderCIK,'InsiderName'=>$_InsiderName,'InsiderAddress'=>$_InsiderAddress,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate,'TransactionCode'=>$_TransactionCode,'SecurityType'=>$_SecurityType,'OwnershipType'=>$_OwnershipType));
	}
	/**
	 * Set InsiderCIK
	 * @param string InsiderCIK
	 * @return string
	 */
	public function setInsiderCIK($_InsiderCIK)
	{
		return ($this->InsiderCIK = $_InsiderCIK);
	}
	/**
	 * Get InsiderCIK
	 * @return string
	 */
	public function getInsiderCIK()
	{
		return $this->InsiderCIK;
	}
	/**
	 * Set InsiderName
	 * @param string InsiderName
	 * @return string
	 */
	public function setInsiderName($_InsiderName)
	{
		return ($this->InsiderName = $_InsiderName);
	}
	/**
	 * Get InsiderName
	 * @return string
	 */
	public function getInsiderName()
	{
		return $this->InsiderName;
	}
	/**
	 * Set InsiderAddress
	 * @param string InsiderAddress
	 * @return string
	 */
	public function setInsiderAddress($_InsiderAddress)
	{
		return ($this->InsiderAddress = $_InsiderAddress);
	}
	/**
	 * Get InsiderAddress
	 * @return string
	 */
	public function getInsiderAddress()
	{
		return $this->InsiderAddress;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
	}
	/**
	 * Set TransactionCode
	 * @param TransactionCodes TransactionCode
	 * @return TransactionCodes
	 */
	public function setTransactionCode($_TransactionCode)
	{
		return ($this->TransactionCode = XiInsiderTypeTransactionCodes::valueIsValid($_TransactionCode)?$_TransactionCode:null);
	}
	/**
	 * Get TransactionCode
	 * @return XiInsiderTypeTransactionCodes
	 */
	public function getTransactionCode()
	{
		return $this->TransactionCode;
	}
	/**
	 * Set SecurityType
	 * @param SecurityTypes SecurityType
	 * @return SecurityTypes
	 */
	public function setSecurityType($_SecurityType)
	{
		return ($this->SecurityType = XiInsiderTypeSecurityTypes::valueIsValid($_SecurityType)?$_SecurityType:null);
	}
	/**
	 * Get SecurityType
	 * @return XiInsiderTypeSecurityTypes
	 */
	public function getSecurityType()
	{
		return $this->SecurityType;
	}
	/**
	 * Set OwnershipType
	 * @param OwnershipTypes OwnershipType
	 * @return OwnershipTypes
	 */
	public function setOwnershipType($_OwnershipType)
	{
		return ($this->OwnershipType = XiInsiderTypeOwnershipTypes::valueIsValid($_OwnershipType)?$_OwnershipType:null);
	}
	/**
	 * Get OwnershipType
	 * @return XiInsiderTypeOwnershipTypes
	 */
	public function getOwnershipType()
	{
		return $this->OwnershipType;
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