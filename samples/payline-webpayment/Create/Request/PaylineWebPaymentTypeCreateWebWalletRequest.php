<?php
/**
 * Class file for PaylineWebPaymentTypeCreateWebWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCreateWebWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCreateWebWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The selectedContractList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeSelectedContractList
	 */
	public $selectedContractList;
	/**
	 * The updatePersonalDetails
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $updatePersonalDetails;
	/**
	 * The buyer
	 * Meta informations :
	 * 	- nillable : false
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
	 * The securityMode
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $securityMode;
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
	 * The notificationURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $notificationURL;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * The customPaymentTemplateURL
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $customPaymentTemplateURL;
	/**
	 * Constructor
	 * @param string contractNumber
	 * @param PaylineWebPaymentTypeSelectedContractList selectedContractList
	 * @param string updatePersonalDetails
	 * @param PaylineWebPaymentTypeBuyer buyer
	 * @param PaylineWebPaymentTypeOwner owner
	 * @param string languageCode
	 * @param string customPaymentPageCode
	 * @param string securityMode
	 * @param string returnURL
	 * @param string cancelURL
	 * @param string notificationURL
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param string customPaymentTemplateURL
	 * @return PaylineWebPaymentTypeCreateWebWalletRequest
	 */
	public function __construct($_contractNumber = null,$_selectedContractList = null,$_updatePersonalDetails = null,$_buyer = null,$_owner = null,$_languageCode = null,$_customPaymentPageCode = null,$_securityMode = null,$_returnURL = null,$_cancelURL = null,$_notificationURL = null,$_privateDataList = null,$_customPaymentTemplateURL = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'selectedContractList'=>$_selectedContractList,'updatePersonalDetails'=>$_updatePersonalDetails,'buyer'=>$_buyer,'owner'=>$_owner,'languageCode'=>$_languageCode,'customPaymentPageCode'=>$_customPaymentPageCode,'securityMode'=>$_securityMode,'returnURL'=>$_returnURL,'cancelURL'=>$_cancelURL,'notificationURL'=>$_notificationURL,'privateDataList'=>$_privateDataList,'customPaymentTemplateURL'=>$_customPaymentTemplateURL));
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
	 * Set updatePersonalDetails
	 * @param string updatePersonalDetails
	 * @return string
	 */
	public function setUpdatePersonalDetails($_updatePersonalDetails)
	{
		return ($this->updatePersonalDetails = $_updatePersonalDetails);
	}
	/**
	 * Get updatePersonalDetails
	 * @return string
	 */
	public function getUpdatePersonalDetails()
	{
		return $this->updatePersonalDetails;
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