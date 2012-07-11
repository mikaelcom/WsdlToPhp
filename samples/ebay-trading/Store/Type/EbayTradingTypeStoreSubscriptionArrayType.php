<?php
/**
 * Class file for EbayTradingTypeStoreSubscriptionArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreSubscriptionArrayType
 * Documentation : Set of eBay Store subscription levels.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreSubscriptionArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Subscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Store subscription level.
	 * @var EbayTradingTypeStoreSubscriptionType
	 */
	public $Subscription;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreSubscriptionType Subscription
	 * @return EbayTradingTypeStoreSubscriptionArrayType
	 */
	public function __construct($_Subscription = null)
	{
		parent::__construct(array('Subscription'=>$_Subscription));
	}
	/**
	 * Set Subscription
	 * @param StoreSubscriptionType Subscription
	 * @return StoreSubscriptionType
	 */
	public function setSubscription($_Subscription)
	{
		return ($this->Subscription = $_Subscription);
	}
	/**
	 * Get Subscription
	 * @return EbayTradingTypeStoreSubscriptionType
	 */
	public function getSubscription()
	{
		return $this->Subscription;
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