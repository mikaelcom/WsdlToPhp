<?php
/**
 * Class file for PayPalTypeDiscountType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDiscountType
 * Documentation : Describes discount information
 * @date 14/07/2012
 */
class PayPalTypeDiscountType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item nameOptional Character length and limits: 127 single-byte characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : description of the discountOptional Character length and limits: 127 single-byte characters
	 * @var string
	 */
	public $Description;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : amount discountedOptional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The RedeemedOfferType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : offer typeOptional
	 * @var PayPalTypeRedeemedOfferType
	 */
	public $RedeemedOfferType;
	/**
	 * The RedeemedOfferID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : offer IDOptional Character length and limits: 64 single-byte characters
	 * @var string
	 */
	public $RedeemedOfferID;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Description
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeRedeemedOfferType RedeemedOfferType
	 * @param string RedeemedOfferID
	 * @return PayPalTypeDiscountType
	 */
	public function __construct($_Name = null,$_Description = null,$_Amount,$_RedeemedOfferType = null,$_RedeemedOfferID = null)
	{
		parent::__construct(array('Name'=>$_Name,'Description'=>$_Description,'Amount'=>$_Amount,'RedeemedOfferType'=>$_RedeemedOfferType,'RedeemedOfferID'=>$_RedeemedOfferID));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set RedeemedOfferType
	 * @param RedeemedOfferType RedeemedOfferType
	 * @return RedeemedOfferType
	 */
	public function setRedeemedOfferType($_RedeemedOfferType)
	{
		return ($this->RedeemedOfferType = PayPalTypeRedeemedOfferType::valueIsValid($_RedeemedOfferType)?$_RedeemedOfferType:null);
	}
	/**
	 * Get RedeemedOfferType
	 * @return PayPalTypeRedeemedOfferType
	 */
	public function getRedeemedOfferType()
	{
		return $this->RedeemedOfferType;
	}
	/**
	 * Set RedeemedOfferID
	 * @param string RedeemedOfferID
	 * @return string
	 */
	public function setRedeemedOfferID($_RedeemedOfferID)
	{
		return ($this->RedeemedOfferID = $_RedeemedOfferID);
	}
	/**
	 * Get RedeemedOfferID
	 * @return string
	 */
	public function getRedeemedOfferID()
	{
		return $this->RedeemedOfferID;
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