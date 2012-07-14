<?php
/**
 * Class file for PayPalTypeEnterBoardingRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEnterBoardingRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeEnterBoardingRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProgramCode
	 * Meta informations :
	 * 	- documentation : Onboarding program code given to you by PayPal. Required Character length and limitations: 64 alphanumeric characters
	 * @var string
	 */
	public $ProgramCode;
	/**
	 * The ProductList
	 * Meta informations :
	 * 	- documentation : A list of comma-separated values that indicate the PayPal products you are implementing for this merchant: Direct Payment (dp) allows payments by credit card without requiring the customer to have a PayPal account. Express Checkout (ec) allows customers to fund transactions with their PayPal account. Authorization and Capture (auth_settle) allows merchants to verify availability of funds in a PayPal account, but capture them at a later time. Administrative APIs (admin_api) is a collection of the PayPal APIs for transaction searching, getting transaction details, refunding, and mass payments. Required Character length and limitations: 64 alphanumeric characters
	 * @var string
	 */
	public $ProductList;
	/**
	 * The PartnerCustom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Any custom information you want to store for this partner Optional Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $PartnerCustom;
	/**
	 * The ImageUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL for the logo displayed on the PayPal Partner Welcome Page. Optional Character length and limitations: 2,048 alphanumeric characters
	 * @var string
	 */
	public $ImageUrl;
	/**
	 * The MarketingCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Marketing category tha configures the graphic displayed n the PayPal Partner Welcome page.
	 * @var PayPalTypeMarketingCategoryType
	 */
	public $MarketingCategory;
	/**
	 * The BusinessInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the merchant’s business
	 * @var PayPalTypeBusinessInfoType
	 */
	public $BusinessInfo;
	/**
	 * The OwnerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the merchant (the business owner)
	 * @var PayPalTypeBusinessOwnerInfoType
	 */
	public $OwnerInfo;
	/**
	 * The BankAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the merchant's bank account
	 * @var PayPalTypeBankAccountDetailsType
	 */
	public $BankAccount;
	/**
	 * Constructor
	 * @param string ProgramCode
	 * @param string ProductList
	 * @param string PartnerCustom
	 * @param string ImageUrl
	 * @param PayPalTypeMarketingCategoryType MarketingCategory
	 * @param PayPalTypeBusinessInfoType BusinessInfo
	 * @param PayPalTypeBusinessOwnerInfoType OwnerInfo
	 * @param PayPalTypeBankAccountDetailsType BankAccount
	 * @return PayPalTypeEnterBoardingRequestDetailsType
	 */
	public function __construct($_ProgramCode = null,$_ProductList = null,$_PartnerCustom = null,$_ImageUrl = null,$_MarketingCategory = null,$_BusinessInfo = null,$_OwnerInfo = null,$_BankAccount = null)
	{
		parent::__construct(array('ProgramCode'=>$_ProgramCode,'ProductList'=>$_ProductList,'PartnerCustom'=>$_PartnerCustom,'ImageUrl'=>$_ImageUrl,'MarketingCategory'=>$_MarketingCategory,'BusinessInfo'=>$_BusinessInfo,'OwnerInfo'=>$_OwnerInfo,'BankAccount'=>$_BankAccount));
	}
	/**
	 * Set ProgramCode
	 * @param string ProgramCode
	 * @return string
	 */
	public function setProgramCode($_ProgramCode)
	{
		return ($this->ProgramCode = $_ProgramCode);
	}
	/**
	 * Get ProgramCode
	 * @return string
	 */
	public function getProgramCode()
	{
		return $this->ProgramCode;
	}
	/**
	 * Set ProductList
	 * @param string ProductList
	 * @return string
	 */
	public function setProductList($_ProductList)
	{
		return ($this->ProductList = $_ProductList);
	}
	/**
	 * Get ProductList
	 * @return string
	 */
	public function getProductList()
	{
		return $this->ProductList;
	}
	/**
	 * Set PartnerCustom
	 * @param string PartnerCustom
	 * @return string
	 */
	public function setPartnerCustom($_PartnerCustom)
	{
		return ($this->PartnerCustom = $_PartnerCustom);
	}
	/**
	 * Get PartnerCustom
	 * @return string
	 */
	public function getPartnerCustom()
	{
		return $this->PartnerCustom;
	}
	/**
	 * Set ImageUrl
	 * @param string ImageUrl
	 * @return string
	 */
	public function setImageUrl($_ImageUrl)
	{
		return ($this->ImageUrl = $_ImageUrl);
	}
	/**
	 * Get ImageUrl
	 * @return string
	 */
	public function getImageUrl()
	{
		return $this->ImageUrl;
	}
	/**
	 * Set MarketingCategory
	 * @param MarketingCategoryType MarketingCategory
	 * @return MarketingCategoryType
	 */
	public function setMarketingCategory($_MarketingCategory)
	{
		return ($this->MarketingCategory = PayPalTypeMarketingCategoryType::valueIsValid($_MarketingCategory)?$_MarketingCategory:null);
	}
	/**
	 * Get MarketingCategory
	 * @return PayPalTypeMarketingCategoryType
	 */
	public function getMarketingCategory()
	{
		return $this->MarketingCategory;
	}
	/**
	 * Set BusinessInfo
	 * @param BusinessInfoType BusinessInfo
	 * @return BusinessInfoType
	 */
	public function setBusinessInfo($_BusinessInfo)
	{
		return ($this->BusinessInfo = $_BusinessInfo);
	}
	/**
	 * Get BusinessInfo
	 * @return PayPalTypeBusinessInfoType
	 */
	public function getBusinessInfo()
	{
		return $this->BusinessInfo;
	}
	/**
	 * Set OwnerInfo
	 * @param BusinessOwnerInfoType OwnerInfo
	 * @return BusinessOwnerInfoType
	 */
	public function setOwnerInfo($_OwnerInfo)
	{
		return ($this->OwnerInfo = $_OwnerInfo);
	}
	/**
	 * Get OwnerInfo
	 * @return PayPalTypeBusinessOwnerInfoType
	 */
	public function getOwnerInfo()
	{
		return $this->OwnerInfo;
	}
	/**
	 * Set BankAccount
	 * @param BankAccountDetailsType BankAccount
	 * @return BankAccountDetailsType
	 */
	public function setBankAccount($_BankAccount)
	{
		return ($this->BankAccount = $_BankAccount);
	}
	/**
	 * Get BankAccount
	 * @return PayPalTypeBankAccountDetailsType
	 */
	public function getBankAccount()
	{
		return $this->BankAccount;
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