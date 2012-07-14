<?php
/**
 * Class file for PayPalTypeRecurringPaymentsProfileDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRecurringPaymentsProfileDetailsType
 * @date 14/07/2012
 */
class PayPalTypeRecurringPaymentsProfileDetailsType extends PayPalWsdlClass
{
	/**
	 * The SubscriberName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Subscriber name - if missing, will use name in buyer's account
	 * @var string
	 */
	public $SubscriberName;
	/**
	 * The SubscriberShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Subscriber address - if missing, will use address in buyer's account
	 * @var PayPalTypeAddressType
	 */
	public $SubscriberShippingAddress;
	/**
	 * The BillingStartDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : When does this Profile begin billing?
	 * @var dateTime
	 */
	public $BillingStartDate;
	/**
	 * The ProfileReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ProfileReference;
	/**
	 * Constructor
	 * @param string SubscriberName
	 * @param PayPalTypeAddressType SubscriberShippingAddress
	 * @param dateTime BillingStartDate
	 * @param string ProfileReference
	 * @return PayPalTypeRecurringPaymentsProfileDetailsType
	 */
	public function __construct($_SubscriberName = null,$_SubscriberShippingAddress = null,$_BillingStartDate,$_ProfileReference = null)
	{
		parent::__construct(array('SubscriberName'=>$_SubscriberName,'SubscriberShippingAddress'=>$_SubscriberShippingAddress,'BillingStartDate'=>$_BillingStartDate,'ProfileReference'=>$_ProfileReference));
	}
	/**
	 * Set SubscriberName
	 * @param string SubscriberName
	 * @return string
	 */
	public function setSubscriberName($_SubscriberName)
	{
		return ($this->SubscriberName = $_SubscriberName);
	}
	/**
	 * Get SubscriberName
	 * @return string
	 */
	public function getSubscriberName()
	{
		return $this->SubscriberName;
	}
	/**
	 * Set SubscriberShippingAddress
	 * @param AddressType SubscriberShippingAddress
	 * @return AddressType
	 */
	public function setSubscriberShippingAddress($_SubscriberShippingAddress)
	{
		return ($this->SubscriberShippingAddress = $_SubscriberShippingAddress);
	}
	/**
	 * Get SubscriberShippingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getSubscriberShippingAddress()
	{
		return $this->SubscriberShippingAddress;
	}
	/**
	 * Set BillingStartDate
	 * @param dateTime BillingStartDate
	 * @return dateTime
	 */
	public function setBillingStartDate($_BillingStartDate)
	{
		return ($this->BillingStartDate = $_BillingStartDate);
	}
	/**
	 * Get BillingStartDate
	 * @return dateTime
	 */
	public function getBillingStartDate()
	{
		return $this->BillingStartDate;
	}
	/**
	 * Set ProfileReference
	 * @param string ProfileReference
	 * @return string
	 */
	public function setProfileReference($_ProfileReference)
	{
		return ($this->ProfileReference = $_ProfileReference);
	}
	/**
	 * Get ProfileReference
	 * @return string
	 */
	public function getProfileReference()
	{
		return $this->ProfileReference;
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