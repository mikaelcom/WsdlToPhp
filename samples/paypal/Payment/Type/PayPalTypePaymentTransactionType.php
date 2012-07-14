<?php
/**
 * Class file for PayPalTypePaymentTransactionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentTransactionType
 * Documentation : PaymentTransactionType Information about a PayPal payment from the seller side
 * @date 14/07/2012
 */
class PayPalTypePaymentTransactionType extends PayPalWsdlClass
{
	/**
	 * The ReceiverInfo
	 * Meta informations :
	 * 	- documentation : Information about the recipient of the payment
	 * @var PayPalTypeReceiverInfoType
	 */
	public $ReceiverInfo;
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- documentation : Information about the payer
	 * @var PayPalTypePayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The PaymentInfo
	 * Meta informations :
	 * 	- documentation : Information about the transaction
	 * @var PayPalTypePaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The PaymentItemInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about an individual item in the transaction
	 * @var PayPalTypePaymentItemInfoType
	 */
	public $PaymentItemInfo;
	/**
	 * The OfferCouponInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about an individual Offer and Coupon information in the transaction
	 * @var PayPalTypeOfferCouponInfoType
	 */
	public $OfferCouponInfo;
	/**
	 * The UserSelectedOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the user selected options.
	 * @var PayPalTypeUserSelectedOptionType
	 */
	public $UserSelectedOptions;
	/**
	 * The GiftMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift message.
	 * @var string
	 */
	public $GiftMessage;
	/**
	 * The GiftReceipt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift receipt.
	 * @var string
	 */
	public $GiftReceipt;
	/**
	 * The GiftWrapName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift Wrap name.
	 * @var string
	 */
	public $GiftWrapName;
	/**
	 * The GiftWrapAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Gift Wrap amount.
	 * @var PayPalTypeBasicAmountType
	 */
	public $GiftWrapAmount;
	/**
	 * The BuyerEmailOptIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Buyer email.
	 * @var string
	 */
	public $BuyerEmailOptIn;
	/**
	 * The SurveyQuestion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the survey question.
	 * @var string
	 */
	public $SurveyQuestion;
	/**
	 * The SurveyChoiceSelected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the survey choice selected by the user.
	 * @var string
	 */
	public $SurveyChoiceSelected;
	/**
	 * Constructor
	 * @param PayPalTypeReceiverInfoType ReceiverInfo
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @param PayPalTypePaymentItemInfoType PaymentItemInfo
	 * @param PayPalTypeOfferCouponInfoType OfferCouponInfo
	 * @param PayPalTypeUserSelectedOptionType UserSelectedOptions
	 * @param string GiftMessage
	 * @param string GiftReceipt
	 * @param string GiftWrapName
	 * @param PayPalTypeBasicAmountType GiftWrapAmount
	 * @param string BuyerEmailOptIn
	 * @param string SurveyQuestion
	 * @param string SurveyChoiceSelected
	 * @return PayPalTypePaymentTransactionType
	 */
	public function __construct($_ReceiverInfo = null,$_PayerInfo = null,$_PaymentInfo = null,$_PaymentItemInfo = null,$_OfferCouponInfo = null,$_UserSelectedOptions = null,$_GiftMessage = null,$_GiftReceipt = null,$_GiftWrapName = null,$_GiftWrapAmount = null,$_BuyerEmailOptIn = null,$_SurveyQuestion = null,$_SurveyChoiceSelected = null)
	{
		parent::__construct(array('ReceiverInfo'=>$_ReceiverInfo,'PayerInfo'=>$_PayerInfo,'PaymentInfo'=>$_PaymentInfo,'PaymentItemInfo'=>$_PaymentItemInfo,'OfferCouponInfo'=>$_OfferCouponInfo,'UserSelectedOptions'=>$_UserSelectedOptions,'GiftMessage'=>$_GiftMessage,'GiftReceipt'=>$_GiftReceipt,'GiftWrapName'=>$_GiftWrapName,'GiftWrapAmount'=>$_GiftWrapAmount,'BuyerEmailOptIn'=>$_BuyerEmailOptIn,'SurveyQuestion'=>$_SurveyQuestion,'SurveyChoiceSelected'=>$_SurveyChoiceSelected));
	}
	/**
	 * Set ReceiverInfo
	 * @param ReceiverInfoType ReceiverInfo
	 * @return ReceiverInfoType
	 */
	public function setReceiverInfo($_ReceiverInfo)
	{
		return ($this->ReceiverInfo = $_ReceiverInfo);
	}
	/**
	 * Get ReceiverInfo
	 * @return PayPalTypeReceiverInfoType
	 */
	public function getReceiverInfo()
	{
		return $this->ReceiverInfo;
	}
	/**
	 * Set PayerInfo
	 * @param PayerInfoType PayerInfo
	 * @return PayerInfoType
	 */
	public function setPayerInfo($_PayerInfo)
	{
		return ($this->PayerInfo = $_PayerInfo);
	}
	/**
	 * Get PayerInfo
	 * @return PayPalTypePayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set PaymentInfo
	 * @param PaymentInfoType PaymentInfo
	 * @return PaymentInfoType
	 */
	public function setPaymentInfo($_PaymentInfo)
	{
		return ($this->PaymentInfo = $_PaymentInfo);
	}
	/**
	 * Get PaymentInfo
	 * @return PayPalTypePaymentInfoType
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set PaymentItemInfo
	 * @param PaymentItemInfoType PaymentItemInfo
	 * @return PaymentItemInfoType
	 */
	public function setPaymentItemInfo($_PaymentItemInfo)
	{
		return ($this->PaymentItemInfo = $_PaymentItemInfo);
	}
	/**
	 * Get PaymentItemInfo
	 * @return PayPalTypePaymentItemInfoType
	 */
	public function getPaymentItemInfo()
	{
		return $this->PaymentItemInfo;
	}
	/**
	 * Set OfferCouponInfo
	 * @param OfferCouponInfoType OfferCouponInfo
	 * @return OfferCouponInfoType
	 */
	public function setOfferCouponInfo($_OfferCouponInfo)
	{
		return ($this->OfferCouponInfo = $_OfferCouponInfo);
	}
	/**
	 * Get OfferCouponInfo
	 * @return PayPalTypeOfferCouponInfoType
	 */
	public function getOfferCouponInfo()
	{
		return $this->OfferCouponInfo;
	}
	/**
	 * Set UserSelectedOptions
	 * @param UserSelectedOptionType UserSelectedOptions
	 * @return UserSelectedOptionType
	 */
	public function setUserSelectedOptions($_UserSelectedOptions)
	{
		return ($this->UserSelectedOptions = $_UserSelectedOptions);
	}
	/**
	 * Get UserSelectedOptions
	 * @return PayPalTypeUserSelectedOptionType
	 */
	public function getUserSelectedOptions()
	{
		return $this->UserSelectedOptions;
	}
	/**
	 * Set GiftMessage
	 * @param string GiftMessage
	 * @return string
	 */
	public function setGiftMessage($_GiftMessage)
	{
		return ($this->GiftMessage = $_GiftMessage);
	}
	/**
	 * Get GiftMessage
	 * @return string
	 */
	public function getGiftMessage()
	{
		return $this->GiftMessage;
	}
	/**
	 * Set GiftReceipt
	 * @param string GiftReceipt
	 * @return string
	 */
	public function setGiftReceipt($_GiftReceipt)
	{
		return ($this->GiftReceipt = $_GiftReceipt);
	}
	/**
	 * Get GiftReceipt
	 * @return string
	 */
	public function getGiftReceipt()
	{
		return $this->GiftReceipt;
	}
	/**
	 * Set GiftWrapName
	 * @param string GiftWrapName
	 * @return string
	 */
	public function setGiftWrapName($_GiftWrapName)
	{
		return ($this->GiftWrapName = $_GiftWrapName);
	}
	/**
	 * Get GiftWrapName
	 * @return string
	 */
	public function getGiftWrapName()
	{
		return $this->GiftWrapName;
	}
	/**
	 * Set GiftWrapAmount
	 * @param BasicAmountType GiftWrapAmount
	 * @return BasicAmountType
	 */
	public function setGiftWrapAmount($_GiftWrapAmount)
	{
		return ($this->GiftWrapAmount = $_GiftWrapAmount);
	}
	/**
	 * Get GiftWrapAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getGiftWrapAmount()
	{
		return $this->GiftWrapAmount;
	}
	/**
	 * Set BuyerEmailOptIn
	 * @param string BuyerEmailOptIn
	 * @return string
	 */
	public function setBuyerEmailOptIn($_BuyerEmailOptIn)
	{
		return ($this->BuyerEmailOptIn = $_BuyerEmailOptIn);
	}
	/**
	 * Get BuyerEmailOptIn
	 * @return string
	 */
	public function getBuyerEmailOptIn()
	{
		return $this->BuyerEmailOptIn;
	}
	/**
	 * Set SurveyQuestion
	 * @param string SurveyQuestion
	 * @return string
	 */
	public function setSurveyQuestion($_SurveyQuestion)
	{
		return ($this->SurveyQuestion = $_SurveyQuestion);
	}
	/**
	 * Get SurveyQuestion
	 * @return string
	 */
	public function getSurveyQuestion()
	{
		return $this->SurveyQuestion;
	}
	/**
	 * Set SurveyChoiceSelected
	 * @param string SurveyChoiceSelected
	 * @return string
	 */
	public function setSurveyChoiceSelected($_SurveyChoiceSelected)
	{
		return ($this->SurveyChoiceSelected = $_SurveyChoiceSelected);
	}
	/**
	 * Get SurveyChoiceSelected
	 * @return string
	 */
	public function getSurveyChoiceSelected()
	{
		return $this->SurveyChoiceSelected;
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