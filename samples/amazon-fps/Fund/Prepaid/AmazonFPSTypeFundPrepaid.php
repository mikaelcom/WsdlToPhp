<?php
/**
 * Class file for AmazonFPSTypeFundPrepaid
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeFundPrepaid
 * @date 10/07/2012
 */
class AmazonFPSTypeFundPrepaid extends AmazonFPSWsdlClass
{
	/**
	 * The SenderTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderTokenId;
	/**
	 * The PrepaidInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PrepaidInstrumentId;
	/**
	 * The FundingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $FundingAmount;
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
	 * @param string PrepaidInstrumentId
	 * @param AmazonFPSTypeAmount FundingAmount
	 * @param string CallerReference
	 * @param string SenderDescription
	 * @param string CallerDescription
	 * @param AmazonFPSTypeDescriptorPolicy DescriptorPolicy
	 * @param integer TransactionTimeoutInMins
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeFundPrepaid
	 */
	public function __construct($_SenderTokenId = null,$_PrepaidInstrumentId = null,$_FundingAmount = null,$_CallerReference = null,$_SenderDescription = null,$_CallerDescription = null,$_DescriptorPolicy = null,$_TransactionTimeoutInMins = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('SenderTokenId'=>$_SenderTokenId,'PrepaidInstrumentId'=>$_PrepaidInstrumentId,'FundingAmount'=>$_FundingAmount,'CallerReference'=>$_CallerReference,'SenderDescription'=>$_SenderDescription,'CallerDescription'=>$_CallerDescription,'DescriptorPolicy'=>$_DescriptorPolicy,'TransactionTimeoutInMins'=>$_TransactionTimeoutInMins,'OverrideIPNURL'=>$_OverrideIPNURL));
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
	 * Set PrepaidInstrumentId
	 * @param string PrepaidInstrumentId
	 * @return string
	 */
	public function setPrepaidInstrumentId($_PrepaidInstrumentId)
	{
		return ($this->PrepaidInstrumentId = $_PrepaidInstrumentId);
	}
	/**
	 * Get PrepaidInstrumentId
	 * @return string
	 */
	public function getPrepaidInstrumentId()
	{
		return $this->PrepaidInstrumentId;
	}
	/**
	 * Set FundingAmount
	 * @param Amount FundingAmount
	 * @return Amount
	 */
	public function setFundingAmount($_FundingAmount)
	{
		return ($this->FundingAmount = $_FundingAmount);
	}
	/**
	 * Get FundingAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getFundingAmount()
	{
		return $this->FundingAmount;
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