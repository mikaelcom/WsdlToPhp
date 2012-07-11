<?php
/**
 * Class file for AmazonFPSTypeRefund
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeRefund
 * @date 10/07/2012
 */
class AmazonFPSTypeRefund extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $RefundAmount;
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
	 * The MarketplaceRefundPolicy
	 * Meta informations :
	 * 	- default : MasterTxnOnly
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeMarketplaceRefundPolicy
	 */
	public $MarketplaceRefundPolicy;
	/**
	 * The OverrideIPNURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNURL;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param AmazonFPSTypeAmount RefundAmount
	 * @param string CallerReference
	 * @param string CallerDescription
	 * @param AmazonFPSTypeMarketplaceRefundPolicy MarketplaceRefundPolicy
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeRefund
	 */
	public function __construct($_TransactionId = null,$_RefundAmount = null,$_CallerReference = null,$_CallerDescription = null,$_MarketplaceRefundPolicy = 'MasterTxnOnly',$_OverrideIPNURL = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'RefundAmount'=>$_RefundAmount,'CallerReference'=>$_CallerReference,'CallerDescription'=>$_CallerDescription,'MarketplaceRefundPolicy'=>$_MarketplaceRefundPolicy,'OverrideIPNURL'=>$_OverrideIPNURL));
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set RefundAmount
	 * @param Amount RefundAmount
	 * @return Amount
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
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
	 * Set MarketplaceRefundPolicy
	 * @param MarketplaceRefundPolicy MarketplaceRefundPolicy
	 * @return MarketplaceRefundPolicy
	 */
	public function setMarketplaceRefundPolicy($_MarketplaceRefundPolicy)
	{
		return ($this->MarketplaceRefundPolicy = AmazonFPSTypeMarketplaceRefundPolicy::valueIsValid($_MarketplaceRefundPolicy)?$_MarketplaceRefundPolicy:null);
	}
	/**
	 * Get MarketplaceRefundPolicy
	 * @return AmazonFPSTypeMarketplaceRefundPolicy
	 */
	public function getMarketplaceRefundPolicy()
	{
		return $this->MarketplaceRefundPolicy;
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