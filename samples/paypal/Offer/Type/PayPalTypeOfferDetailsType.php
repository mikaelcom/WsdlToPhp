<?php
/**
 * Class file for PayPalTypeOfferDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOfferDetailsType
 * Documentation : OfferDetailsType Specific information for an offer.
 * @date 14/07/2012
 */
class PayPalTypeOfferDetailsType extends PayPalWsdlClass
{
	/**
	 * The OfferCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Code used to identify the promotion offer.
	 * @var string
	 */
	public $OfferCode;
	/**
	 * The BMLOfferInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specific infromation for BML, Similar structure could be added for sepcific promotion needs like CrossPromotions
	 * @var PayPalTypeBMLOfferInfoType
	 */
	public $BMLOfferInfo;
	/**
	 * Constructor
	 * @param string OfferCode
	 * @param PayPalTypeBMLOfferInfoType BMLOfferInfo
	 * @return PayPalTypeOfferDetailsType
	 */
	public function __construct($_OfferCode = null,$_BMLOfferInfo = null)
	{
		parent::__construct(array('OfferCode'=>$_OfferCode,'BMLOfferInfo'=>$_BMLOfferInfo));
	}
	/**
	 * Set OfferCode
	 * @param string OfferCode
	 * @return string
	 */
	public function setOfferCode($_OfferCode)
	{
		return ($this->OfferCode = $_OfferCode);
	}
	/**
	 * Get OfferCode
	 * @return string
	 */
	public function getOfferCode()
	{
		return $this->OfferCode;
	}
	/**
	 * Set BMLOfferInfo
	 * @param BMLOfferInfoType BMLOfferInfo
	 * @return BMLOfferInfoType
	 */
	public function setBMLOfferInfo($_BMLOfferInfo)
	{
		return ($this->BMLOfferInfo = $_BMLOfferInfo);
	}
	/**
	 * Get BMLOfferInfo
	 * @return PayPalTypeBMLOfferInfoType
	 */
	public function getBMLOfferInfo()
	{
		return $this->BMLOfferInfo;
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