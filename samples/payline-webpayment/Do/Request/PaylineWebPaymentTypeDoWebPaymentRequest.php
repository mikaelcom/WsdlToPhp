<?php
/**
 * Class file for PaylineWebPaymentTypeDoWebPaymentRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoWebPaymentRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoWebPaymentRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The returnURL
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $returnURL;
	/**
	 * The cancelURL
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $cancelURL;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
	/**
	 * The notificationURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $notificationURL;
	/**
	 * The selectedContractList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeSelectedContractList
	 */
	public $selectedContractList;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * The languageCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $languageCode;
	/**
	 * The customPaymentPageCode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $customPaymentPageCode;
	/**
	 * The buyer
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeBuyer
	 */
	public $buyer;
	/**
	 * The owner
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOwner
	 */
	public $owner;
	/**
	 * The securityMode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $securityMode;
	/**
	 * The recurring
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeRecurring
	 */
	public $recurring;
	/**
	 * The customPaymentTemplateURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $customPaymentTemplateURL;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePayment payment
	 * @param string returnURL
	 * @param string cancelURL
	 * @param PaylineWebPaymentTypeOrder order
	 * @param string notificationURL
	 * @param PaylineWebPaymentTypeSelectedContractList selectedContractList
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param string languageCode
	 * @param string customPaymentPageCode
	 * @param PaylineWebPaymentTypeBuyer buyer
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param string securityMode
	 * @param PaylineWebPaymentTypeRecurring recurring
	 * @param string customPaymentTemplateURL
	 * @return PaylineWebPaymentTypeDoWebPaymentRequest
	 */
	public function __construct($_payment = null,$_returnURL = null,$_cancelURL = null,$_order = null,$_notificationURL = null,$_selectedContractList = null,$_privateDataList = null,$_languageCode = null,$_customPaymentPageCode = null,$_buyer = null,$_owner = null,$_securityMode = null,$_recurring = null,$_customPaymentTemplateURL = null)
	{
		parent::__construct(array('payment'=>$_payment,'returnURL'=>$_returnURL,'cancelURL'=>$_cancelURL,'order'=>$_order,'notificationURL'=>$_notificationURL,'selectedContractList'=>$_selectedContractList,'privateDataList'=>$_privateDataList,'languageCode'=>$_languageCode,'customPaymentPageCode'=>$_customPaymentPageCode,'buyer'=>$_buyer,'owner'=>$_owner,'securityMode'=>$_securityMode,'recurring'=>$_recurring,'customPaymentTemplateURL'=>$_customPaymentTemplateURL));
	}
	/**
	 * Set payment
	 * @param payment payment
	 * @return payment
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return PaylineWebPaymentTypepayment
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set returnURL
	 * @param string returnURL
	 * @return string
	 */
	public function setReturnURL($_returnURL)
	{
		return ($this->returnURL = $_returnURL);
	}
	/**
	 * Get returnURL
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->returnURL;
	}
	/**
	 * Set cancelURL
	 * @param string cancelURL
	 * @return string
	 */
	public function setCancelURL($_cancelURL)
	{
		return ($this->cancelURL = $_cancelURL);
	}
	/**
	 * Get cancelURL
	 * @return string
	 */
	public function getCancelURL()
	{
		return $this->cancelURL;
	}
	/**
	 * Set order
	 * @param order order
	 * @return order
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return PaylineWebPaymentTypeorder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set notificationURL
	 * @param string notificationURL
	 * @return string
	 */
	public function setNotificationURL($_notificationURL)
	{
		return ($this->notificationURL = $_notificationURL);
	}
	/**
	 * Get notificationURL
	 * @return string
	 */
	public function getNotificationURL()
	{
		return $this->notificationURL;
	}
	/**
	 * Set selectedContractList
	 * @param selectedContractList selectedContractList
	 * @return selectedContractList
	 */
	public function setSelectedContractList($_selectedContractList)
	{
		return ($this->selectedContractList = $_selectedContractList);
	}
	/**
	 * Get selectedContractList
	 * @return PaylineWebPaymentTypeselectedContractList
	 */
	public function getSelectedContractList()
	{
		return $this->selectedContractList;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
	}
	/**
	 * Set languageCode
	 * @param string languageCode
	 * @return string
	 */
	public function setLanguageCode($_languageCode)
	{
		return ($this->languageCode = $_languageCode);
	}
	/**
	 * Get languageCode
	 * @return string
	 */
	public function getLanguageCode()
	{
		return $this->languageCode;
	}
	/**
	 * Set customPaymentPageCode
	 * @param string customPaymentPageCode
	 * @return string
	 */
	public function setCustomPaymentPageCode($_customPaymentPageCode)
	{
		return ($this->customPaymentPageCode = $_customPaymentPageCode);
	}
	/**
	 * Get customPaymentPageCode
	 * @return string
	 */
	public function getCustomPaymentPageCode()
	{
		return $this->customPaymentPageCode;
	}
	/**
	 * Set buyer
	 * @param buyer buyer
	 * @return buyer
	 */
	public function setBuyer($_buyer)
	{
		return ($this->buyer = $_buyer);
	}
	/**
	 * Get buyer
	 * @return PaylineWebPaymentTypebuyer
	 */
	public function getBuyer()
	{
		return $this->buyer;
	}
	/**
	 * Set owner
	 * @param owner owner
	 * @return owner
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return PaylineWebPaymentTypeowner
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set securityMode
	 * @param string securityMode
	 * @return string
	 */
	public function setSecurityMode($_securityMode)
	{
		return ($this->securityMode = $_securityMode);
	}
	/**
	 * Get securityMode
	 * @return string
	 */
	public function getSecurityMode()
	{
		return $this->securityMode;
	}
	/**
	 * Set recurring
	 * @param recurring recurring
	 * @return recurring
	 */
	public function setRecurring($_recurring)
	{
		return ($this->recurring = $_recurring);
	}
	/**
	 * Get recurring
	 * @return PaylineWebPaymentTyperecurring
	 */
	public function getRecurring()
	{
		return $this->recurring;
	}
	/**
	 * Set customPaymentTemplateURL
	 * @param string customPaymentTemplateURL
	 * @return string
	 */
	public function setCustomPaymentTemplateURL($_customPaymentTemplateURL)
	{
		return ($this->customPaymentTemplateURL = $_customPaymentTemplateURL);
	}
	/**
	 * Get customPaymentTemplateURL
	 * @return string
	 */
	public function getCustomPaymentTemplateURL()
	{
		return $this->customPaymentTemplateURL;
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