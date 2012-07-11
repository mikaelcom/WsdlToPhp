<?php
/**
 * Class file for PaylineWebPaymentTypeContract
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeContract
 * Documentation : This element contains all information about contract
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeContract extends PaylineWebPaymentWsdlClass
{
	/**
	 * The cardType
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $cardType;
	/**
	 * The label
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $label;
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The currency
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $currency;
	/**
	 * The settlementType
	 * @var settlementType
	 */
	public $settlementType;
	/**
	 * The maxAmountPerTransaction
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $maxAmountPerTransaction;
	/**
	 * The technicalData
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeTechnicalData
	 */
	public $technicalData;
	/**
	 * The bankAccount
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeBankAccount
	 */
	public $bankAccount;
	/**
	 * The acquirerInterlocutor
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeInterlocutor
	 */
	public $acquirerInterlocutor;
	/**
	 * Constructor
	 * @param string cardType
	 * @param string label
	 * @param string contractNumber
	 * @param string currency
	 * @param settlementType settlementType
	 * @param int maxAmountPerTransaction
	 * @param PaylineWebPaymentTypeTechnicalData technicalData
	 * @param PaylineWebPaymentTypeBankAccount bankAccount
	 * @param PaylineWebPaymentTypeInterlocutor acquirerInterlocutor
	 * @return PaylineWebPaymentTypeContract
	 */
	public function __construct($_cardType = null,$_label = null,$_contractNumber = null,$_currency = null,$_settlementType = null,$_maxAmountPerTransaction = null,$_technicalData = null,$_bankAccount = null,$_acquirerInterlocutor = null)
	{
		parent::__construct(array('cardType'=>$_cardType,'label'=>$_label,'contractNumber'=>$_contractNumber,'currency'=>$_currency,'settlementType'=>$_settlementType,'maxAmountPerTransaction'=>$_maxAmountPerTransaction,'technicalData'=>$_technicalData,'bankAccount'=>$_bankAccount,'acquirerInterlocutor'=>$_acquirerInterlocutor));
	}
	/**
	 * Set cardType
	 * @param string cardType
	 * @return string
	 */
	public function setCardType($_cardType)
	{
		return ($this->cardType = $_cardType);
	}
	/**
	 * Get cardType
	 * @return string
	 */
	public function getCardType()
	{
		return $this->cardType;
	}
	/**
	 * Set label
	 * @param string label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set contractNumber
	 * @param string contractNumber
	 * @return string
	 */
	public function setContractNumber($_contractNumber)
	{
		return ($this->contractNumber = $_contractNumber);
	}
	/**
	 * Get contractNumber
	 * @return string
	 */
	public function getContractNumber()
	{
		return $this->contractNumber;
	}
	/**
	 * Set currency
	 * @param string currency
	 * @return string
	 */
	public function setCurrency($_currency)
	{
		return ($this->currency = $_currency);
	}
	/**
	 * Get currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}
	/**
	 * Set settlementType
	 * @param settlementType settlementType
	 * @return settlementType
	 */
	public function setSettlementType($_settlementType)
	{
		return ($this->settlementType = $_settlementType);
	}
	/**
	 * Get settlementType
	 * @return settlementType
	 */
	public function getSettlementType()
	{
		return $this->settlementType;
	}
	/**
	 * Set maxAmountPerTransaction
	 * @param int maxAmountPerTransaction
	 * @return int
	 */
	public function setMaxAmountPerTransaction($_maxAmountPerTransaction)
	{
		return ($this->maxAmountPerTransaction = $_maxAmountPerTransaction);
	}
	/**
	 * Get maxAmountPerTransaction
	 * @return int
	 */
	public function getMaxAmountPerTransaction()
	{
		return $this->maxAmountPerTransaction;
	}
	/**
	 * Set technicalData
	 * @param technicalData technicalData
	 * @return technicalData
	 */
	public function setTechnicalData($_technicalData)
	{
		return ($this->technicalData = $_technicalData);
	}
	/**
	 * Get technicalData
	 * @return PaylineWebPaymentTypetechnicalData
	 */
	public function getTechnicalData()
	{
		return $this->technicalData;
	}
	/**
	 * Set bankAccount
	 * @param bankAccount bankAccount
	 * @return bankAccount
	 */
	public function setBankAccount($_bankAccount)
	{
		return ($this->bankAccount = $_bankAccount);
	}
	/**
	 * Get bankAccount
	 * @return PaylineWebPaymentTypebankAccount
	 */
	public function getBankAccount()
	{
		return $this->bankAccount;
	}
	/**
	 * Set acquirerInterlocutor
	 * @param interlocutor acquirerInterlocutor
	 * @return interlocutor
	 */
	public function setAcquirerInterlocutor($_acquirerInterlocutor)
	{
		return ($this->acquirerInterlocutor = $_acquirerInterlocutor);
	}
	/**
	 * Get acquirerInterlocutor
	 * @return PaylineWebPaymentTypeinterlocutor
	 */
	public function getAcquirerInterlocutor()
	{
		return $this->acquirerInterlocutor;
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