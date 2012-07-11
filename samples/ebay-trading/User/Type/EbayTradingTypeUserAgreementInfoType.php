<?php
/**
 * Class file for EbayTradingTypeUserAgreementInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUserAgreementInfoType
 * Documentation : Type defining the <b>UserAgreementInfo</b> container, which consists of details related to the current status of a DE or AT seller signing the required supplemental user agreement for the new eBay payment process.
 * @date 04/07/2012
 */
class EbayTradingTypeUserAgreementInfoType extends EbayTradingWsdlClass
{
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : String value that indicates the site to which the supplemental user agreement information pertains. This value is always returned with the <b>UserAgreementInfo</b> container. <br><br> Although this value is based on <b>SiteCodeType</b> (which contains many values), the only values that will be returned here are 'Germany' or 'Australia'.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The SellereBayPaymentProcessStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates whether or not a new DE or AT seller has accepted the supplement user agreement for the new payment process for that site (indicated by the <b>UserAgreementInfo.site</b> value). This value is always returned with the <b>UserAgreementInfo</b> container.
	 * @var EbayTradingTypeSellereBayPaymentProcessStatusCodeType
	 */
	public $SellereBayPaymentProcessStatus;
	/**
	 * The AcceptedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This timestamp indicates the date on which the DE or AT seller accepted the supplemental user agreement for the new payment process. Unless the <b>UserAgreementInfo.SellereBayPaymentProcessStatus</b> value is 'MustAcceptUA', this value is always returned with <b>UserAgreementInfo</b> container.
	 * @var dateTime
	 */
	public $AcceptedTime;
	/**
	 * The SellereBayPaymentProcessEnableTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This timestamp indicates the date on which the new eBay payment process was fully enabled (if <b>UserAgreementInfo.SellereBayPaymentProcessStatus</b>='eBayPaymentProcessEnabled') or scheduled to be enabled (if <b>UserAgreementInfo.SellereBayPaymentProcessStatus</b>='AcceptedUA' or 'MustAcceptUA', and the enable date is known by eBay). Unless the eBay payment process enable date is not known for the seller, this value is always returned with <b>UserAgreementInfo</b> container.
	 * @var dateTime
	 */
	public $SellereBayPaymentProcessEnableTime;
	/**
	 * The UserAgreementURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is the URL for new eBay payment process supplemental user agreement. This URL is only returned if the <b>UserAgreementInfo.SellereBayPaymentProcessStatus</b>='MustAcceptUA'.
	 * @var anyURI
	 */
	public $UserAgreementURL;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param EbayTradingTypeSellereBayPaymentProcessStatusCodeType SellereBayPaymentProcessStatus
	 * @param dateTime AcceptedTime
	 * @param dateTime SellereBayPaymentProcessEnableTime
	 * @param anyURI UserAgreementURL
	 * @param DOMDocument any
	 * @return EbayTradingTypeUserAgreementInfoType
	 */
	public function __construct($_Site = null,$_SellereBayPaymentProcessStatus = null,$_AcceptedTime = null,$_SellereBayPaymentProcessEnableTime = null,$_UserAgreementURL = null,$_any = null)
	{
		parent::__construct(array('Site'=>$_Site,'SellereBayPaymentProcessStatus'=>$_SellereBayPaymentProcessStatus,'AcceptedTime'=>$_AcceptedTime,'SellereBayPaymentProcessEnableTime'=>$_SellereBayPaymentProcessEnableTime,'UserAgreementURL'=>$_UserAgreementURL,'any'=>$_any));
	}
	/**
	 * Set Site
	 * @param SiteCodeType Site
	 * @return SiteCodeType
	 */
	public function setSite($_Site)
	{
		return ($this->Site = EbayTradingTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set SellereBayPaymentProcessStatus
	 * @param SellereBayPaymentProcessStatusCodeType SellereBayPaymentProcessStatus
	 * @return SellereBayPaymentProcessStatusCodeType
	 */
	public function setSellereBayPaymentProcessStatus($_SellereBayPaymentProcessStatus)
	{
		return ($this->SellereBayPaymentProcessStatus = EbayTradingTypeSellereBayPaymentProcessStatusCodeType::valueIsValid($_SellereBayPaymentProcessStatus)?$_SellereBayPaymentProcessStatus:null);
	}
	/**
	 * Get SellereBayPaymentProcessStatus
	 * @return EbayTradingTypeSellereBayPaymentProcessStatusCodeType
	 */
	public function getSellereBayPaymentProcessStatus()
	{
		return $this->SellereBayPaymentProcessStatus;
	}
	/**
	 * Set AcceptedTime
	 * @param dateTime AcceptedTime
	 * @return dateTime
	 */
	public function setAcceptedTime($_AcceptedTime)
	{
		return ($this->AcceptedTime = $_AcceptedTime);
	}
	/**
	 * Get AcceptedTime
	 * @return dateTime
	 */
	public function getAcceptedTime()
	{
		return $this->AcceptedTime;
	}
	/**
	 * Set SellereBayPaymentProcessEnableTime
	 * @param dateTime SellereBayPaymentProcessEnableTime
	 * @return dateTime
	 */
	public function setSellereBayPaymentProcessEnableTime($_SellereBayPaymentProcessEnableTime)
	{
		return ($this->SellereBayPaymentProcessEnableTime = $_SellereBayPaymentProcessEnableTime);
	}
	/**
	 * Get SellereBayPaymentProcessEnableTime
	 * @return dateTime
	 */
	public function getSellereBayPaymentProcessEnableTime()
	{
		return $this->SellereBayPaymentProcessEnableTime;
	}
	/**
	 * Set UserAgreementURL
	 * @param anyURI UserAgreementURL
	 * @return anyURI
	 */
	public function setUserAgreementURL($_UserAgreementURL)
	{
		return ($this->UserAgreementURL = $_UserAgreementURL);
	}
	/**
	 * Get UserAgreementURL
	 * @return anyURI
	 */
	public function getUserAgreementURL()
	{
		return $this->UserAgreementURL;
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