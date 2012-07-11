<?php
/**
 * Class file for AmazonFPSTypeReserve
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeReserve
 * @date 10/07/2012
 */
class AmazonFPSTypeReserve extends AmazonFPSWsdlClass
{
	/**
	 * The SenderTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderTokenId;
	/**
	 * The RecipientTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RecipientTokenId;
	/**
	 * The TransactionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $TransactionAmount;
	/**
	 * The ChargeFeeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeChargeFeeTo
	 */
	public $ChargeFeeTo;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The CallerDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerDescription;
	/**
	 * The SenderDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderDescription;
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
	 * The MarketplaceFixedFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $MarketplaceFixedFee;
	/**
	 * The MarketplaceVariableFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var decimal
	 */
	public $MarketplaceVariableFee;
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
	 * @param string RecipientTokenId
	 * @param AmazonFPSTypeAmount TransactionAmount
	 * @param AmazonFPSTypeChargeFeeTo ChargeFeeTo
	 * @param string CallerReference
	 * @param string CallerDescription
	 * @param string SenderDescription
	 * @param AmazonFPSTypeDescriptorPolicy DescriptorPolicy
	 * @param integer TransactionTimeoutInMins
	 * @param AmazonFPSTypeAmount MarketplaceFixedFee
	 * @param decimal MarketplaceVariableFee
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeReserve
	 */
	public function __construct($_SenderTokenId = null,$_RecipientTokenId = null,$_TransactionAmount = null,$_ChargeFeeTo = null,$_CallerReference = null,$_CallerDescription = null,$_SenderDescription = null,$_DescriptorPolicy = null,$_TransactionTimeoutInMins = null,$_MarketplaceFixedFee = null,$_MarketplaceVariableFee = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('SenderTokenId'=>$_SenderTokenId,'RecipientTokenId'=>$_RecipientTokenId,'TransactionAmount'=>$_TransactionAmount,'ChargeFeeTo'=>$_ChargeFeeTo,'CallerReference'=>$_CallerReference,'CallerDescription'=>$_CallerDescription,'SenderDescription'=>$_SenderDescription,'DescriptorPolicy'=>$_DescriptorPolicy,'TransactionTimeoutInMins'=>$_TransactionTimeoutInMins,'MarketplaceFixedFee'=>$_MarketplaceFixedFee,'MarketplaceVariableFee'=>$_MarketplaceVariableFee,'OverrideIPNURL'=>$_OverrideIPNURL));
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
	 * Set RecipientTokenId
	 * @param string RecipientTokenId
	 * @return string
	 */
	public function setRecipientTokenId($_RecipientTokenId)
	{
		return ($this->RecipientTokenId = $_RecipientTokenId);
	}
	/**
	 * Get RecipientTokenId
	 * @return string
	 */
	public function getRecipientTokenId()
	{
		return $this->RecipientTokenId;
	}
	/**
	 * Set TransactionAmount
	 * @param Amount TransactionAmount
	 * @return Amount
	 */
	public function setTransactionAmount($_TransactionAmount)
	{
		return ($this->TransactionAmount = $_TransactionAmount);
	}
	/**
	 * Get TransactionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getTransactionAmount()
	{
		return $this->TransactionAmount;
	}
	/**
	 * Set ChargeFeeTo
	 * @param ChargeFeeTo ChargeFeeTo
	 * @return ChargeFeeTo
	 */
	public function setChargeFeeTo($_ChargeFeeTo)
	{
		return ($this->ChargeFeeTo = AmazonFPSTypeChargeFeeTo::valueIsValid($_ChargeFeeTo)?$_ChargeFeeTo:null);
	}
	/**
	 * Get ChargeFeeTo
	 * @return AmazonFPSTypeChargeFeeTo
	 */
	public function getChargeFeeTo()
	{
		return $this->ChargeFeeTo;
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
	 * Set MarketplaceFixedFee
	 * @param Amount MarketplaceFixedFee
	 * @return Amount
	 */
	public function setMarketplaceFixedFee($_MarketplaceFixedFee)
	{
		return ($this->MarketplaceFixedFee = $_MarketplaceFixedFee);
	}
	/**
	 * Get MarketplaceFixedFee
	 * @return AmazonFPSTypeAmount
	 */
	public function getMarketplaceFixedFee()
	{
		return $this->MarketplaceFixedFee;
	}
	/**
	 * Set MarketplaceVariableFee
	 * @param decimal MarketplaceVariableFee
	 * @return decimal
	 */
	public function setMarketplaceVariableFee($_MarketplaceVariableFee)
	{
		return ($this->MarketplaceVariableFee = $_MarketplaceVariableFee);
	}
	/**
	 * Get MarketplaceVariableFee
	 * @return decimal
	 */
	public function getMarketplaceVariableFee()
	{
		return $this->MarketplaceVariableFee;
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