<?php
/**
 * Class file for PaylineWebPaymentTypeUpdateWebWalletRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeUpdateWebWalletRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeUpdateWebWalletRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contractNumber
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $contractNumber;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * The updatePersonalDetails
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $updatePersonalDetails;
	/**
	 * The updateOwnerDetails
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $updateOwnerDetails;
	/**
	 * The updatePaymentDetails
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $updatePaymentDetails;
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
	 * @param string walletId
	 * @param string updatePersonalDetails
	 * @param string updateOwnerDetails
	 * @param string updatePaymentDetails
	 * @param string languageCode
	 * @param string customPaymentPageCode
	 * @param string securityMode
	 * @param string returnURL
	 * @param string cancelURL
	 * @param string notificationURL
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param string customPaymentTemplateURL
	 * @return PaylineWebPaymentTypeUpdateWebWalletRequest
	 */
	public function __construct($_contractNumber = null,$_walletId = null,$_updatePersonalDetails = null,$_updateOwnerDetails = null,$_updatePaymentDetails = null,$_languageCode = null,$_customPaymentPageCode = null,$_securityMode = null,$_returnURL = null,$_cancelURL = null,$_notificationURL = null,$_privateDataList = null,$_customPaymentTemplateURL = null)
	{
		parent::__construct(array('contractNumber'=>$_contractNumber,'walletId'=>$_walletId,'updatePersonalDetails'=>$_updatePersonalDetails,'updateOwnerDetails'=>$_updateOwnerDetails,'updatePaymentDetails'=>$_updatePaymentDetails,'languageCode'=>$_languageCode,'customPaymentPageCode'=>$_customPaymentPageCode,'securityMode'=>$_securityMode,'returnURL'=>$_returnURL,'cancelURL'=>$_cancelURL,'notificationURL'=>$_notificationURL,'privateDataList'=>$_privateDataList,'customPaymentTemplateURL'=>$_customPaymentTemplateURL));
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
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
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
	 * Set updateOwnerDetails
	 * @param string updateOwnerDetails
	 * @return string
	 */
	public function setUpdateOwnerDetails($_updateOwnerDetails)
	{
		return ($this->updateOwnerDetails = $_updateOwnerDetails);
	}
	/**
	 * Get updateOwnerDetails
	 * @return string
	 */
	public function getUpdateOwnerDetails()
	{
		return $this->updateOwnerDetails;
	}
	/**
	 * Set updatePaymentDetails
	 * @param string updatePaymentDetails
	 * @return string
	 */
	public function setUpdatePaymentDetails($_updatePaymentDetails)
	{
		return ($this->updatePaymentDetails = $_updatePaymentDetails);
	}
	/**
	 * Get updatePaymentDetails
	 * @return string
	 */
	public function getUpdatePaymentDetails()
	{
		return $this->updatePaymentDetails;
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