<?php
/**
 * Class file for XiInsiderTypeTransaction
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeTransaction
 * @date 08/07/2012
 */
class XiInsiderTypeTransaction extends XiInsiderTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurity
	 */
	public $Security;
	/**
	 * The Insider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsider
	 */
	public $Insider;
	/**
	 * The SecurityType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurityTypes
	 */
	public $SecurityType;
	/**
	 * The FormType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeFormTypes
	 */
	public $FormType;
	/**
	 * The EquitySwap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $EquitySwap;
	/**
	 * The SecurityTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityTitle;
	/**
	 * The OptionTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OptionTitle;
	/**
	 * The TransactionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TransactionDate;
	/**
	 * The ExecutionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExecutionDate;
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExpirationDate;
	/**
	 * The ExercisableDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExercisableDate;
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
	 * The OptionAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $OptionAmount;
	/**
	 * The StockAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StockAmount;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The AmountOwnedAfter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $AmountOwnedAfter;
	/**
	 * The OwnershipType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipTypes
	 */
	public $OwnershipType;
	/**
	 * The OwnershipForm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OwnershipForm;
	/**
	 * The FormUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FormUrl;
	/**
	 * Constructor
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeInsider Insider
	 * @param XiInsiderTypeSecurityTypes SecurityType
	 * @param XiInsiderTypeFormTypes FormType
	 * @param boolean EquitySwap
	 * @param string SecurityTitle
	 * @param string OptionTitle
	 * @param string TransactionDate
	 * @param string ExecutionDate
	 * @param string ExpirationDate
	 * @param string ExercisableDate
	 * @param XiInsiderTypeTransactionCodes TransactionCode
	 * @param string TransactionDescription
	 * @param int OptionAmount
	 * @param int StockAmount
	 * @param double Price
	 * @param double Value
	 * @param int AmountOwnedAfter
	 * @param XiInsiderTypeOwnershipTypes OwnershipType
	 * @param string OwnershipForm
	 * @param string FormUrl
	 * @return XiInsiderTypeTransaction
	 */
	public function __construct($_Security = null,$_Insider = null,$_SecurityType,$_FormType,$_EquitySwap,$_SecurityTitle = null,$_OptionTitle = null,$_TransactionDate = null,$_ExecutionDate = null,$_ExpirationDate = null,$_ExercisableDate = null,$_TransactionCode,$_TransactionDescription = null,$_OptionAmount,$_StockAmount,$_Price,$_Value,$_AmountOwnedAfter,$_OwnershipType,$_OwnershipForm = null,$_FormUrl = null)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'Insider'=>$_Insider,'SecurityType'=>$_SecurityType,'FormType'=>$_FormType,'EquitySwap'=>$_EquitySwap,'SecurityTitle'=>$_SecurityTitle,'OptionTitle'=>$_OptionTitle,'TransactionDate'=>$_TransactionDate,'ExecutionDate'=>$_ExecutionDate,'ExpirationDate'=>$_ExpirationDate,'ExercisableDate'=>$_ExercisableDate,'TransactionCode'=>$_TransactionCode,'TransactionDescription'=>$_TransactionDescription,'OptionAmount'=>$_OptionAmount,'StockAmount'=>$_StockAmount,'Price'=>$_Price,'Value'=>$_Value,'AmountOwnedAfter'=>$_AmountOwnedAfter,'OwnershipType'=>$_OwnershipType,'OwnershipForm'=>$_OwnershipForm,'FormUrl'=>$_FormUrl));
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
	 * @return XiInsiderTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Insider
	 * @param Insider Insider
	 * @return Insider
	 */
	public function setInsider($_Insider)
	{
		return ($this->Insider = $_Insider);
	}
	/**
	 * Get Insider
	 * @return XiInsiderTypeInsider
	 */
	public function getInsider()
	{
		return $this->Insider;
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
	 * Set FormType
	 * @param FormTypes FormType
	 * @return FormTypes
	 */
	public function setFormType($_FormType)
	{
		return ($this->FormType = XiInsiderTypeFormTypes::valueIsValid($_FormType)?$_FormType:null);
	}
	/**
	 * Get FormType
	 * @return XiInsiderTypeFormTypes
	 */
	public function getFormType()
	{
		return $this->FormType;
	}
	/**
	 * Set EquitySwap
	 * @param boolean EquitySwap
	 * @return boolean
	 */
	public function setEquitySwap($_EquitySwap)
	{
		return ($this->EquitySwap = $_EquitySwap);
	}
	/**
	 * Get EquitySwap
	 * @return boolean
	 */
	public function getEquitySwap()
	{
		return $this->EquitySwap;
	}
	/**
	 * Set SecurityTitle
	 * @param string SecurityTitle
	 * @return string
	 */
	public function setSecurityTitle($_SecurityTitle)
	{
		return ($this->SecurityTitle = $_SecurityTitle);
	}
	/**
	 * Get SecurityTitle
	 * @return string
	 */
	public function getSecurityTitle()
	{
		return $this->SecurityTitle;
	}
	/**
	 * Set OptionTitle
	 * @param string OptionTitle
	 * @return string
	 */
	public function setOptionTitle($_OptionTitle)
	{
		return ($this->OptionTitle = $_OptionTitle);
	}
	/**
	 * Get OptionTitle
	 * @return string
	 */
	public function getOptionTitle()
	{
		return $this->OptionTitle;
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
	 * Set ExecutionDate
	 * @param string ExecutionDate
	 * @return string
	 */
	public function setExecutionDate($_ExecutionDate)
	{
		return ($this->ExecutionDate = $_ExecutionDate);
	}
	/**
	 * Get ExecutionDate
	 * @return string
	 */
	public function getExecutionDate()
	{
		return $this->ExecutionDate;
	}
	/**
	 * Set ExpirationDate
	 * @param string ExpirationDate
	 * @return string
	 */
	public function setExpirationDate($_ExpirationDate)
	{
		return ($this->ExpirationDate = $_ExpirationDate);
	}
	/**
	 * Get ExpirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->ExpirationDate;
	}
	/**
	 * Set ExercisableDate
	 * @param string ExercisableDate
	 * @return string
	 */
	public function setExercisableDate($_ExercisableDate)
	{
		return ($this->ExercisableDate = $_ExercisableDate);
	}
	/**
	 * Get ExercisableDate
	 * @return string
	 */
	public function getExercisableDate()
	{
		return $this->ExercisableDate;
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
	 * Set OptionAmount
	 * @param int OptionAmount
	 * @return int
	 */
	public function setOptionAmount($_OptionAmount)
	{
		return ($this->OptionAmount = $_OptionAmount);
	}
	/**
	 * Get OptionAmount
	 * @return int
	 */
	public function getOptionAmount()
	{
		return $this->OptionAmount;
	}
	/**
	 * Set StockAmount
	 * @param int StockAmount
	 * @return int
	 */
	public function setStockAmount($_StockAmount)
	{
		return ($this->StockAmount = $_StockAmount);
	}
	/**
	 * Get StockAmount
	 * @return int
	 */
	public function getStockAmount()
	{
		return $this->StockAmount;
	}
	/**
	 * Set Price
	 * @param double Price
	 * @return double
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return double
	 */
	public function getPrice()
	{
		return $this->Price;
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
	 * Set OwnershipForm
	 * @param string OwnershipForm
	 * @return string
	 */
	public function setOwnershipForm($_OwnershipForm)
	{
		return ($this->OwnershipForm = $_OwnershipForm);
	}
	/**
	 * Get OwnershipForm
	 * @return string
	 */
	public function getOwnershipForm()
	{
		return $this->OwnershipForm;
	}
	/**
	 * Set FormUrl
	 * @param string FormUrl
	 * @return string
	 */
	public function setFormUrl($_FormUrl)
	{
		return ($this->FormUrl = $_FormUrl);
	}
	/**
	 * Get FormUrl
	 * @return string
	 */
	public function getFormUrl()
	{
		return $this->FormUrl;
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