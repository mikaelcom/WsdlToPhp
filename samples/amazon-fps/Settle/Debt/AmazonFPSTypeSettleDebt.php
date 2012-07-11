<?php
/**
 * Class file for AmazonFPSTypeSettleDebt
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSettleDebt
 * @date 10/07/2012
 */
class AmazonFPSTypeSettleDebt extends AmazonFPSWsdlClass
{
	/**
	 * The SenderTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderTokenId;
	/**
	 * The CreditInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CreditInstrumentId;
	/**
	 * The SettlementAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $SettlementAmount;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The SenderDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderDescription;
	/**
	 * The CallerDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerDescription;
	/**
	 * The DescriptorPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeDescriptorPolicy
	 */
	public $DescriptorPolicy;
	/**
	 * The TransactionTimeoutInMins
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $TransactionTimeoutInMins;
	/**
	 * The OverrideIPNURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNURL;
	/**
	 * Constructor
	 * @param string SenderTokenId
	 * @param string CreditInstrumentId
	 * @param AmazonFPSTypeAmount SettlementAmount
	 * @param string CallerReference
	 * @param string SenderDescription
	 * @param string CallerDescription
	 * @param AmazonFPSTypeDescriptorPolicy DescriptorPolicy
	 * @param integer TransactionTimeoutInMins
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeSettleDebt
	 */
	public function __construct($_SenderTokenId = null,$_CreditInstrumentId = null,$_SettlementAmount = null,$_CallerReference = null,$_SenderDescription = null,$_CallerDescription = null,$_DescriptorPolicy = null,$_TransactionTimeoutInMins = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('SenderTokenId'=>$_SenderTokenId,'CreditInstrumentId'=>$_CreditInstrumentId,'SettlementAmount'=>$_SettlementAmount,'CallerReference'=>$_CallerReference,'SenderDescription'=>$_SenderDescription,'CallerDescription'=>$_CallerDescription,'DescriptorPolicy'=>$_DescriptorPolicy,'TransactionTimeoutInMins'=>$_TransactionTimeoutInMins,'OverrideIPNURL'=>$_OverrideIPNURL));
	}
	/**
	 * Set SenderTokenId
	 * @param string SenderTokenId
	 * @return string
	 */
	public function setSenderTokenId($_SenderTokenId)
	{
		return ($this->SenderTokenId = $_SenderTokenId);
	}
	/**
	 * Get SenderTokenId
	 * @return string
	 */
	public function getSenderTokenId()
	{
		return $this->SenderTokenId;
	}
	/**
	 * Set CreditInstrumentId
	 * @param string CreditInstrumentId
	 * @return string
	 */
	public function setCreditInstrumentId($_CreditInstrumentId)
	{
		return ($this->CreditInstrumentId = $_CreditInstrumentId);
	}
	/**
	 * Get CreditInstrumentId
	 * @return string
	 */
	public function getCreditInstrumentId()
	{
		return $this->CreditInstrumentId;
	}
	/**
	 * Set SettlementAmount
	 * @param Amount SettlementAmount
	 * @return Amount
	 */
	public function setSettlementAmount($_SettlementAmount)
	{
		return ($this->SettlementAmount = $_SettlementAmount);
	}
	/**
	 * Get SettlementAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getSettlementAmount()
	{
		return $this->SettlementAmount;
	}
	/**
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set SenderDescription
	 * @param string SenderDescription
	 * @return string
	 */
	public function setSenderDescription($_SenderDescription)
	{
		return ($this->SenderDescription = $_SenderDescription);
	}
	/**
	 * Get SenderDescription
	 * @return string
	 */
	public function getSenderDescription()
	{
		return $this->SenderDescription;
	}
	/**
	 * Set CallerDescription
	 * @param string CallerDescription
	 * @return string
	 */
	public function setCallerDescription($_CallerDescription)
	{
		return ($this->CallerDescription = $_CallerDescription);
	}
	/**
	 * Get CallerDescription
	 * @return string
	 */
	public function getCallerDescription()
	{
		return $this->CallerDescription;
	}
	/**
	 * Set DescriptorPolicy
	 * @param DescriptorPolicy DescriptorPolicy
	 * @return DescriptorPolicy
	 */
	public function setDescriptorPolicy($_DescriptorPolicy)
	{
		return ($this->DescriptorPolicy = $_DescriptorPolicy);
	}
	/**
	 * Get DescriptorPolicy
	 * @return AmazonFPSTypeDescriptorPolicy
	 */
	public function getDescriptorPolicy()
	{
		return $this->DescriptorPolicy;
	}
	/**
	 * Set TransactionTimeoutInMins
	 * @param integer TransactionTimeoutInMins
	 * @return integer
	 */
	public function setTransactionTimeoutInMins($_TransactionTimeoutInMins)
	{
		return ($this->TransactionTimeoutInMins = $_TransactionTimeoutInMins);
	}
	/**
	 * Get TransactionTimeoutInMins
	 * @return integer
	 */
	public function getTransactionTimeoutInMins()
	{
		return $this->TransactionTimeoutInMins;
	}
	/**
	 * Set OverrideIPNURL
	 * @param string OverrideIPNURL
	 * @return string
	 */
	public function setOverrideIPNURL($_OverrideIPNURL)
	{
		return ($this->OverrideIPNURL = $_OverrideIPNURL);
	}
	/**
	 * Get OverrideIPNURL
	 * @return string
	 */
	public function getOverrideIPNURL()
	{
		return $this->OverrideIPNURL;
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