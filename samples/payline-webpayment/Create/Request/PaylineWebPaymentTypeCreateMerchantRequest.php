<?php
/**
 * Class file for PaylineWebPaymentTypeCreateMerchantRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCreateMerchantRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCreateMerchantRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The corporateName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $corporateName;
	/**
	 * The publicName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $publicName;
	/**
	 * The currency
	 * @var currency
	 */
	public $currency;
	/**
	 * The nationalID
	 * @var PaylineWebPaymentTypeNationalID
	 */
	public $nationalID;
	/**
	 * The distributor
	 * Meta informations :
	 * 	- nillable : true
	 * 	- documentation : Payline Distributor ID
	 * @var string
	 */
	public $distributor;
	/**
	 * The merchantAddress
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAddressInterlocutor
	 */
	public $merchantAddress;
	/**
	 * The businessInterlocutor
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeInterlocutor
	 */
	public $businessInterlocutor;
	/**
	 * The technicalInterlocutor
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeInterlocutor
	 */
	public $technicalInterlocutor;
	/**
	 * The subscription
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeSubscription
	 */
	public $subscription;
	/**
	 * The poss
	 * @var PaylineWebPaymentTypePoss
	 */
	public $poss;
	/**
	 * The partner
	 * Meta informations :
	 * 	- nillable : true
	 * 	- documentation : Billing partner. 1:monext, 2:cetib, 3:payline.com
	 * @var string
	 */
	public $partner;
	/**
	 * Constructor
	 * @param string corporateName
	 * @param string publicName
	 * @param currency currency
	 * @param PaylineWebPaymentTypeNationalID nationalID
	 * @param string distributor
	 * @param PaylineWebPaymentTypeAddressInterlocutor merchantAddress
	 * @param PaylineWebPaymentTypeInterlocutor businessInterlocutor
	 * @param PaylineWebPaymentTypeInterlocutor technicalInterlocutor
	 * @param PaylineWebPaymentTypeSubscription subscription
	 * @param PaylineWebPaymentTypePoss poss
	 * @param string partner
	 * @return PaylineWebPaymentTypeCreateMerchantRequest
	 */
	public function __construct($_corporateName = null,$_publicName = null,$_currency = null,$_nationalID = null,$_distributor = null,$_merchantAddress = null,$_businessInterlocutor = null,$_technicalInterlocutor = null,$_subscription = null,$_poss = null,$_partner = null)
	{
		parent::__construct(array('corporateName'=>$_corporateName,'publicName'=>$_publicName,'currency'=>$_currency,'nationalID'=>$_nationalID,'distributor'=>$_distributor,'merchantAddress'=>$_merchantAddress,'businessInterlocutor'=>$_businessInterlocutor,'technicalInterlocutor'=>$_technicalInterlocutor,'subscription'=>$_subscription,'poss'=>$_poss,'partner'=>$_partner));
	}
	/**
	 * Set corporateName
	 * @param string corporateName
	 * @return string
	 */
	public function setCorporateName($_corporateName)
	{
		return ($this->corporateName = $_corporateName);
	}
	/**
	 * Get corporateName
	 * @return string
	 */
	public function getCorporateName()
	{
		return $this->corporateName;
	}
	/**
	 * Set publicName
	 * @param string publicName
	 * @return string
	 */
	public function setPublicName($_publicName)
	{
		return ($this->publicName = $_publicName);
	}
	/**
	 * Get publicName
	 * @return string
	 */
	public function getPublicName()
	{
		return $this->publicName;
	}
	/**
	 * Set currency
	 * @param currency currency
	 * @return currency
	 */
	public function setCurrency($_currency)
	{
		return ($this->currency = $_currency);
	}
	/**
	 * Get currency
	 * @return currency
	 */
	public function getCurrency()
	{
		return $this->currency;
	}
	/**
	 * Set nationalID
	 * @param nationalID nationalID
	 * @return nationalID
	 */
	public function setNationalID($_nationalID)
	{
		return ($this->nationalID = $_nationalID);
	}
	/**
	 * Get nationalID
	 * @return PaylineWebPaymentTypenationalID
	 */
	public function getNationalID()
	{
		return $this->nationalID;
	}
	/**
	 * Set distributor
	 * @param string distributor
	 * @return string
	 */
	public function setDistributor($_distributor)
	{
		return ($this->distributor = $_distributor);
	}
	/**
	 * Get distributor
	 * @return string
	 */
	public function getDistributor()
	{
		return $this->distributor;
	}
	/**
	 * Set merchantAddress
	 * @param addressInterlocutor merchantAddress
	 * @return addressInterlocutor
	 */
	public function setMerchantAddress($_merchantAddress)
	{
		return ($this->merchantAddress = $_merchantAddress);
	}
	/**
	 * Get merchantAddress
	 * @return PaylineWebPaymentTypeaddressInterlocutor
	 */
	public function getMerchantAddress()
	{
		return $this->merchantAddress;
	}
	/**
	 * Set businessInterlocutor
	 * @param interlocutor businessInterlocutor
	 * @return interlocutor
	 */
	public function setBusinessInterlocutor($_businessInterlocutor)
	{
		return ($this->businessInterlocutor = $_businessInterlocutor);
	}
	/**
	 * Get businessInterlocutor
	 * @return PaylineWebPaymentTypeinterlocutor
	 */
	public function getBusinessInterlocutor()
	{
		return $this->businessInterlocutor;
	}
	/**
	 * Set technicalInterlocutor
	 * @param interlocutor technicalInterlocutor
	 * @return interlocutor
	 */
	public function setTechnicalInterlocutor($_technicalInterlocutor)
	{
		return ($this->technicalInterlocutor = $_technicalInterlocutor);
	}
	/**
	 * Get technicalInterlocutor
	 * @return PaylineWebPaymentTypeinterlocutor
	 */
	public function getTechnicalInterlocutor()
	{
		return $this->technicalInterlocutor;
	}
	/**
	 * Set subscription
	 * @param subscription subscription
	 * @return subscription
	 */
	public function setSubscription($_subscription)
	{
		return ($this->subscription = $_subscription);
	}
	/**
	 * Get subscription
	 * @return PaylineWebPaymentTypesubscription
	 */
	public function getSubscription()
	{
		return $this->subscription;
	}
	/**
	 * Set poss
	 * @param poss poss
	 * @return poss
	 */
	public function setPoss($_poss)
	{
		return ($this->poss = $_poss);
	}
	/**
	 * Get poss
	 * @return PaylineWebPaymentTypeposs
	 */
	public function getPoss()
	{
		return $this->poss;
	}
	/**
	 * Set partner
	 * @param string partner
	 * @return string
	 */
	public function setPartner($_partner)
	{
		return ($this->partner = $_partner);
	}
	/**
	 * Get partner
	 * @return string
	 */
	public function getPartner()
	{
		return $this->partner;
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