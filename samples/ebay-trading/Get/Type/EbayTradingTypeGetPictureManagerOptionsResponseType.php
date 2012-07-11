<?php
/**
 * Class file for EbayTradingTypeGetPictureManagerOptionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPictureManagerOptionsResponseType
 * Documentation : Returns a list of Picture Manager options and allowed values.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPictureManagerOptionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Subscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A type of Picture Manager subscription, with a subscription level, fee, and allowed storage size.
	 * @var EbayTradingTypePictureManagerSubscriptionType
	 */
	public $Subscription;
	/**
	 * The PictureType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A global definition for displaying pictures, with a maximum size.
	 * @var EbayTradingTypePictureManagerPictureDisplayType
	 */
	public $PictureType;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerSubscriptionType Subscription
	 * @param EbayTradingTypePictureManagerPictureDisplayType PictureType
	 * @return EbayTradingTypeGetPictureManagerOptionsResponseType
	 */
	public function __construct($_Subscription = null,$_PictureType = null)
	{
		EbayTradingWsdlClass::__construct(array('Subscription'=>$_Subscription,'PictureType'=>$_PictureType));
	}
	/**
	 * Set Subscription
	 * @param PictureManagerSubscriptionType Subscription
	 * @return PictureManagerSubscriptionType
	 */
	public function setSubscription($_Subscription)
	{
		return ($this->Subscription = $_Subscription);
	}
	/**
	 * Get Subscription
	 * @return EbayTradingTypePictureManagerSubscriptionType
	 */
	public function getSubscription()
	{
		return $this->Subscription;
	}
	/**
	 * Set PictureType
	 * @param PictureManagerPictureDisplayType PictureType
	 * @return PictureManagerPictureDisplayType
	 */
	public function setPictureType($_PictureType)
	{
		return ($this->PictureType = $_PictureType);
	}
	/**
	 * Get PictureType
	 * @return EbayTradingTypePictureManagerPictureDisplayType
	 */
	public function getPictureType()
	{
		return $this->PictureType;
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