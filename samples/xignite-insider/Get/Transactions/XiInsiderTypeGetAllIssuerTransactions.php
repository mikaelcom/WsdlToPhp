<?php
/**
 * Class file for XiInsiderTypeGetAllIssuerTransactions
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetAllIssuerTransactions
 * @date 08/07/2012
 */
class XiInsiderTypeGetAllIssuerTransactions extends XiInsiderWsdlClass
{
	/**
	 * The OnDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OnDate;
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
	 * @param string OnDate
	 * @param XiInsiderTypeTransactionCodes TransactionCode
	 * @param XiInsiderTypeSecurityTypes SecurityType
	 * @param XiInsiderTypeOwnershipTypes OwnershipType
	 * @return XiInsiderTypeGetAllIssuerTransactions
	 */
	public function __construct($_OnDate = null,$_TransactionCode,$_SecurityType,$_OwnershipType)
	{
		parent::__construct(array('OnDate'=>$_OnDate,'TransactionCode'=>$_TransactionCode,'SecurityType'=>$_SecurityType,'OwnershipType'=>$_OwnershipType));
	}
	/**
	 * Set OnDate
	 * @param string OnDate
	 * @return string
	 */
	public function setOnDate($_OnDate)
	{
		return ($this->OnDate = $_OnDate);
	}
	/**
	 * Get OnDate
	 * @return string
	 */
	public function getOnDate()
	{
		return $this->OnDate;
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