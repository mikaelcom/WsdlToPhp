<?php
/**
 * Class file for EbayTradingTypeSellereBayPaymentProcessConsentCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellereBayPaymentProcessConsentCodeType
 * Documentation : Type defining the <b>SellereBayPaymentProcessConsent</b> container, which is returned to all DE and AT sellers, and consists of details of the seller's account status regarding the new eBay payment process.
 * @date 04/07/2012
 */
class EbayTradingTypeSellereBayPaymentProcessConsentCodeType extends EbayTradingWsdlClass
{
	/**
	 * The PayoutMethodSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag to indicate whether or not a DE or AT seller has set the payout method type on the account. This field is always returned with the <b>SellereBayPaymentProcessConsent</b> container.
	 * @var boolean
	 */
	public $PayoutMethodSet;
	/**
	 * The PayoutMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates the account type that the DE or AT seller has selected as their default seller payout account. Once a DE or AT seller has accepted the supplemental user agreement for the new eBay payment process, that seller must set the default payout account in My eBay preferences. eBay will distribute seller payouts to this account. This field will not be returned if <b>PayoutMethodSet</b>='false'.
	 * @var EbayTradingTypePayoutMethodType
	 */
	public $PayoutMethod;
	/**
	 * The UserAgreementInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of details related to the current status of a DE or AT seller signing the required supplemental user agreement for the new eBay payment process. This container will always be returned to DE and AT sellers and the child values that are returned will be dependent on the current <b>SellereBayPaymentProcessStatus</b> value for the seller's account. <br><br> If the seller lists items on both the DE and AT sites, a <b>UserAgreementInfo</b> container will be returned for each site, with the sites being distinguished by the <b>UserAgreementInfo.Site</b> value (either 'Germany' or 'Austria').
	 * @var EbayTradingTypeUserAgreementInfoType
	 */
	public $UserAgreementInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean PayoutMethodSet
	 * @param EbayTradingTypePayoutMethodType PayoutMethod
	 * @param EbayTradingTypeUserAgreementInfoType UserAgreementInfo
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellereBayPaymentProcessConsentCodeType
	 */
	public function __construct($_PayoutMethodSet = null,$_PayoutMethod = null,$_UserAgreementInfo = null,$_any = null)
	{
		parent::__construct(array('PayoutMethodSet'=>$_PayoutMethodSet,'PayoutMethod'=>$_PayoutMethod,'UserAgreementInfo'=>$_UserAgreementInfo,'any'=>$_any));
	}
	/**
	 * Set PayoutMethodSet
	 * @param boolean PayoutMethodSet
	 * @return boolean
	 */
	public function setPayoutMethodSet($_PayoutMethodSet)
	{
		return ($this->PayoutMethodSet = $_PayoutMethodSet);
	}
	/**
	 * Get PayoutMethodSet
	 * @return boolean
	 */
	public function getPayoutMethodSet()
	{
		return $this->PayoutMethodSet;
	}
	/**
	 * Set PayoutMethod
	 * @param PayoutMethodType PayoutMethod
	 * @return PayoutMethodType
	 */
	public function setPayoutMethod($_PayoutMethod)
	{
		return ($this->PayoutMethod = EbayTradingTypePayoutMethodType::valueIsValid($_PayoutMethod)?$_PayoutMethod:null);
	}
	/**
	 * Get PayoutMethod
	 * @return EbayTradingTypePayoutMethodType
	 */
	public function getPayoutMethod()
	{
		return $this->PayoutMethod;
	}
	/**
	 * Set UserAgreementInfo
	 * @param UserAgreementInfoType UserAgreementInfo
	 * @return UserAgreementInfoType
	 */
	public function setUserAgreementInfo($_UserAgreementInfo)
	{
		return ($this->UserAgreementInfo = $_UserAgreementInfo);
	}
	/**
	 * Get UserAgreementInfo
	 * @return EbayTradingTypeUserAgreementInfoType
	 */
	public function getUserAgreementInfo()
	{
		return $this->UserAgreementInfo;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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