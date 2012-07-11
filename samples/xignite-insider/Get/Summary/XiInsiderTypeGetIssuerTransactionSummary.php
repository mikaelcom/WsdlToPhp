<?php
/**
 * Class file for XiInsiderTypeGetIssuerTransactionSummary
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetIssuerTransactionSummary
 * @date 08/07/2012
 */
class XiInsiderTypeGetIssuerTransactionSummary extends XiInsiderWsdlClass
{
	/**
	 * The IssuerIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerIdentifier;
	/**
	 * The IssuerIdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIdentifierTypes
	 */
	public $IssuerIdentifierType;
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
	 * @param string IssuerIdentifier
	 * @param XiInsiderTypeIdentifierTypes IssuerIdentifierType
	 * @param string FromDate
	 * @param string ToDate
	 * @param XiInsiderTypeTransactionCodes TransactionCode
	 * @param XiInsiderTypeSecurityTypes SecurityType
	 * @param XiInsiderTypeOwnershipTypes OwnershipType
	 * @return XiInsiderTypeGetIssuerTransactionSummary
	 */
	public function __construct($_IssuerIdentifier = null,$_IssuerIdentifierType,$_FromDate = null,$_ToDate = null,$_TransactionCode,$_SecurityType,$_OwnershipType)
	{
		parent::__construct(array('IssuerIdentifier'=>$_IssuerIdentifier,'IssuerIdentifierType'=>$_IssuerIdentifierType,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate,'TransactionCode'=>$_TransactionCode,'SecurityType'=>$_SecurityType,'OwnershipType'=>$_OwnershipType));
	}
	/**
	 * Set IssuerIdentifier
	 * @param string IssuerIdentifier
	 * @return string
	 */
	public function setIssuerIdentifier($_IssuerIdentifier)
	{
		return ($this->IssuerIdentifier = $_IssuerIdentifier);
	}
	/**
	 * Get IssuerIdentifier
	 * @return string
	 */
	public function getIssuerIdentifier()
	{
		return $this->IssuerIdentifier;
	}
	/**
	 * Set IssuerIdentifierType
	 * @param IdentifierTypes IssuerIdentifierType
	 * @return IdentifierTypes
	 */
	public function setIssuerIdentifierType($_IssuerIdentifierType)
	{
		return ($this->IssuerIdentifierType = XiInsiderTypeIdentifierTypes::valueIsValid($_IssuerIdentifierType)?$_IssuerIdentifierType:null);
	}
	/**
	 * Get IssuerIdentifierType
	 * @return XiInsiderTypeIdentifierTypes
	 */
	public function getIssuerIdentifierType()
	{
		return $this->IssuerIdentifierType;
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