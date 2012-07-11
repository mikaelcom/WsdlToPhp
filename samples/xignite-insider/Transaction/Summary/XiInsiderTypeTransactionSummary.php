<?php
/**
 * Class file for XiInsiderTypeTransactionSummary
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeTransactionSummary
 * @date 08/07/2012
 */
class XiInsiderTypeTransactionSummary extends XiInsiderTypeCommon
{
	/**
	 * The InsiderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderName;
	/**
	 * The InsiderCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsiderCIK;
	/**
	 * The SecuritySymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecuritySymbol;
	/**
	 * The SecurityCIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityCIK;
	/**
	 * The SecurityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurityTypes
	 */
	public $SecurityType;
	/**
	 * The TransactionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TransactionDate;
	/**
	 * The TransactionCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeTransactionCodes
	 */
	public $TransactionCode;
	/**
	 * The TransactionDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TransactionDescription;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Amount;
	/**
	 * The LowPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LowPrice;
	/**
	 * The HighPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $HighPrice;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The OwnershipType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipTypes
	 */
	public $OwnershipType;
	/**
	 * The AmountOwnedAfter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AmountOwnedAfter;
	/**
	 * Constructor
	 * @param string InsiderName
	 * @param string InsiderCIK
	 * @param string SecuritySymbol
	 * @param string SecurityCIK
	 * @param XiInsiderTypeSecurityTypes SecurityType
	 * @param string TransactionDate
	 * @param XiInsiderTypeTransactionCodes TransactionCode
	 * @param string TransactionDescription
	 * @param int Amount
	 * @param double LowPrice
	 * @param double HighPrice
	 * @param double Value
	 * @param XiInsiderTypeOwnershipTypes OwnershipType
	 * @param int AmountOwnedAfter
	 * @return XiInsiderTypeTransactionSummary
	 */
	public function __construct($_InsiderName = null,$_InsiderCIK = null,$_SecuritySymbol = null,$_SecurityCIK = null,$_SecurityType,$_TransactionDate = null,$_TransactionCode,$_TransactionDescription = null,$_Amount,$_LowPrice,$_HighPrice,$_Value,$_OwnershipType,$_AmountOwnedAfter)
	{
		XiInsiderWsdlClass::__construct(array('InsiderName'=>$_InsiderName,'InsiderCIK'=>$_InsiderCIK,'SecuritySymbol'=>$_SecuritySymbol,'SecurityCIK'=>$_SecurityCIK,'SecurityType'=>$_SecurityType,'TransactionDate'=>$_TransactionDate,'TransactionCode'=>$_TransactionCode,'TransactionDescription'=>$_TransactionDescription,'Amount'=>$_Amount,'LowPrice'=>$_LowPrice,'HighPrice'=>$_HighPrice,'Value'=>$_Value,'OwnershipType'=>$_OwnershipType,'AmountOwnedAfter'=>$_AmountOwnedAfter));
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
	 * Set SecuritySymbol
	 * @param string SecuritySymbol
	 * @return string
	 */
	public function setSecuritySymbol($_SecuritySymbol)
	{
		return ($this->SecuritySymbol = $_SecuritySymbol);
	}
	/**
	 * Get SecuritySymbol
	 * @return string
	 */
	public function getSecuritySymbol()
	{
		return $this->SecuritySymbol;
	}
	/**
	 * Set SecurityCIK
	 * @param string SecurityCIK
	 * @return string
	 */
	public function setSecurityCIK($_SecurityCIK)
	{
		return ($this->SecurityCIK = $_SecurityCIK);
	}
	/**
	 * Get SecurityCIK
	 * @return string
	 */
	public function getSecurityCIK()
	{
		return $this->SecurityCIK;
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
	 * Set TransactionDate
	 * @param string TransactionDate
	 * @return string
	 */
	public function setTransactionDate($_TransactionDate)
	{
		return ($this->TransactionDate = $_TransactionDate);
	}
	/**
	 * Get TransactionDate
	 * @return string
	 */
	public function getTransactionDate()
	{
		return $this->TransactionDate;
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
	 * Set TransactionDescription
	 * @param string TransactionDescription
	 * @return string
	 */
	public function setTransactionDescription($_TransactionDescription)
	{
		return ($this->TransactionDescription = $_TransactionDescription);
	}
	/**
	 * Get TransactionDescription
	 * @return string
	 */
	public function getTransactionDescription()
	{
		return $this->TransactionDescription;
	}
	/**
	 * Set Amount
	 * @param int Amount
	 * @return int
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return int
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set LowPrice
	 * @param double LowPrice
	 * @return double
	 */
	public function setLowPrice($_LowPrice)
	{
		return ($this->LowPrice = $_LowPrice);
	}
	/**
	 * Get LowPrice
	 * @return double
	 */
	public function getLowPrice()
	{
		return $this->LowPrice;
	}
	/**
	 * Set HighPrice
	 * @param double HighPrice
	 * @return double
	 */
	public function setHighPrice($_HighPrice)
	{
		return ($this->HighPrice = $_HighPrice);
	}
	/**
	 * Get HighPrice
	 * @return double
	 */
	public function getHighPrice()
	{
		return $this->HighPrice;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
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
	 * Set AmountOwnedAfter
	 * @param int AmountOwnedAfter
	 * @return int
	 */
	public function setAmountOwnedAfter($_AmountOwnedAfter)
	{
		return ($this->AmountOwnedAfter = $_AmountOwnedAfter);
	}
	/**
	 * Get AmountOwnedAfter
	 * @return int
	 */
	public function getAmountOwnedAfter()
	{
		return $this->AmountOwnedAfter;
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