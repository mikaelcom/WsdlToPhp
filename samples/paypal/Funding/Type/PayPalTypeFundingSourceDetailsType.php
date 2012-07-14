<?php
/**
 * Class file for PayPalTypeFundingSourceDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFundingSourceDetailsType
 * @date 14/07/2012
 */
class PayPalTypeFundingSourceDetailsType extends PayPalWsdlClass
{
	/**
	 * The AllowPushFunding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Allowable values: 0,1 The value 1 indicates that the customer can accept push funding, and 0 means they cannot. Optional Character length and limitations: One single-byte numeric character.
	 * @var string
	 */
	public $AllowPushFunding;
	/**
	 * The UserSelectedFundingSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Allowable values: ELV, CreditCard, ChinaUnionPay, BML This element could be used to specify the perered funding option for a guest users. It has effect only if LandingPage element is set to Billing. Otherwise it will be ignored.
	 * @var PayPalTypeUserSelectedFundingSourceType
	 */
	public $UserSelectedFundingSource;
	/**
	 * Constructor
	 * @param string AllowPushFunding
	 * @param PayPalTypeUserSelectedFundingSourceType UserSelectedFundingSource
	 * @return PayPalTypeFundingSourceDetailsType
	 */
	public function __construct($_AllowPushFunding = null,$_UserSelectedFundingSource = null)
	{
		parent::__construct(array('AllowPushFunding'=>$_AllowPushFunding,'UserSelectedFundingSource'=>$_UserSelectedFundingSource));
	}
	/**
	 * Set AllowPushFunding
	 * @param string AllowPushFunding
	 * @return string
	 */
	public function setAllowPushFunding($_AllowPushFunding)
	{
		return ($this->AllowPushFunding = $_AllowPushFunding);
	}
	/**
	 * Get AllowPushFunding
	 * @return string
	 */
	public function getAllowPushFunding()
	{
		return $this->AllowPushFunding;
	}
	/**
	 * Set UserSelectedFundingSource
	 * @param UserSelectedFundingSourceType UserSelectedFundingSource
	 * @return UserSelectedFundingSourceType
	 */
	public function setUserSelectedFundingSource($_UserSelectedFundingSource)
	{
		return ($this->UserSelectedFundingSource = PayPalTypeUserSelectedFundingSourceType::valueIsValid($_UserSelectedFundingSource)?$_UserSelectedFundingSource:null);
	}
	/**
	 * Get UserSelectedFundingSource
	 * @return PayPalTypeUserSelectedFundingSourceType
	 */
	public function getUserSelectedFundingSource()
	{
		return $this->UserSelectedFundingSource;
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