<?php
/**
 * Class file for EbayTradingTypeValidateTestUserRegistrationRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeValidateTestUserRegistrationRequestType
 * Documentation : Requests to enable a test user to sell items in the Sandbox environment.
 * @date 04/07/2012
 */
class EbayTradingTypeValidateTestUserRegistrationRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value for the feedback score of a user. If no value is passed in the request, or if the value is zero, the feedback score is unchanged. This element is not intended for regularly testing feedback because the feedback value can change after the request.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The RegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value for the date and time that a user's registration begins.
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The SubscribeSA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if a user subscribes to Seller's Assistant. You cannot request to subscribe a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to unsubscribe a user.
	 * @var boolean
	 */
	public $SubscribeSA;
	/**
	 * The SubscribeSAPro
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if a user subscribes to Seller's Assistant Pro. You cannot request to subscribe a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to unsubscribe a user.
	 * @var boolean
	 */
	public $SubscribeSAPro;
	/**
	 * The SubscribeSM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if a user subscribes to Selling Manager. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
	 * @var boolean
	 */
	public $SubscribeSM;
	/**
	 * The SubscribeSMPro
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if a user subscribes to Selling Manager Pro. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
	 * @var boolean
	 */
	public $SubscribeSMPro;
	/**
	 * Constructor
	 * @param int FeedbackScore
	 * @param dateTime RegistrationDate
	 * @param boolean SubscribeSA
	 * @param boolean SubscribeSAPro
	 * @param boolean SubscribeSM
	 * @param boolean SubscribeSMPro
	 * @return EbayTradingTypeValidateTestUserRegistrationRequestType
	 */
	public function __construct($_FeedbackScore = null,$_RegistrationDate = null,$_SubscribeSA = null,$_SubscribeSAPro = null,$_SubscribeSM = null,$_SubscribeSMPro = null)
	{
		EbayTradingWsdlClass::__construct(array('FeedbackScore'=>$_FeedbackScore,'RegistrationDate'=>$_RegistrationDate,'SubscribeSA'=>$_SubscribeSA,'SubscribeSAPro'=>$_SubscribeSAPro,'SubscribeSM'=>$_SubscribeSM,'SubscribeSMPro'=>$_SubscribeSMPro));
	}
	/**
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set RegistrationDate
	 * @param dateTime RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_RegistrationDate)
	{
		return ($this->RegistrationDate = $_RegistrationDate);
	}
	/**
	 * Get RegistrationDate
	 * @return dateTime
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * Set SubscribeSA
	 * @param boolean SubscribeSA
	 * @return boolean
	 */
	public function setSubscribeSA($_SubscribeSA)
	{
		return ($this->SubscribeSA = $_SubscribeSA);
	}
	/**
	 * Get SubscribeSA
	 * @return boolean
	 */
	public function getSubscribeSA()
	{
		return $this->SubscribeSA;
	}
	/**
	 * Set SubscribeSAPro
	 * @param boolean SubscribeSAPro
	 * @return boolean
	 */
	public function setSubscribeSAPro($_SubscribeSAPro)
	{
		return ($this->SubscribeSAPro = $_SubscribeSAPro);
	}
	/**
	 * Get SubscribeSAPro
	 * @return boolean
	 */
	public function getSubscribeSAPro()
	{
		return $this->SubscribeSAPro;
	}
	/**
	 * Set SubscribeSM
	 * @param boolean SubscribeSM
	 * @return boolean
	 */
	public function setSubscribeSM($_SubscribeSM)
	{
		return ($this->SubscribeSM = $_SubscribeSM);
	}
	/**
	 * Get SubscribeSM
	 * @return boolean
	 */
	public function getSubscribeSM()
	{
		return $this->SubscribeSM;
	}
	/**
	 * Set SubscribeSMPro
	 * @param boolean SubscribeSMPro
	 * @return boolean
	 */
	public function setSubscribeSMPro($_SubscribeSMPro)
	{
		return ($this->SubscribeSMPro = $_SubscribeSMPro);
	}
	/**
	 * Get SubscribeSMPro
	 * @return boolean
	 */
	public function getSubscribeSMPro()
	{
		return $this->SubscribeSMPro;
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