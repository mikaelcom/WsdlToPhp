<?php
/**
 * Class file for EbayTradingTypeIntegratedMerchantCreditCardInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeIntegratedMerchantCreditCardInfoType
 * Documentation : Indicates the sites on which a seller is eligible to offer IMCC as a payment method.
 * @date 04/07/2012
 */
class EbayTradingTypeIntegratedMerchantCreditCardInfoType extends EbayTradingWsdlClass
{
	/**
	 * The SupportedSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates a site on which a seller has a payment gateway account (and thus a site on which the seller can use the IntegratedMerchantCreditCard payment method).
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $SupportedSite;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType SupportedSite
	 * @param DOMDocument any
	 * @return EbayTradingTypeIntegratedMerchantCreditCardInfoType
	 */
	public function __construct($_SupportedSite = null,$_any = null)
	{
		parent::__construct(array('SupportedSite'=>$_SupportedSite,'any'=>$_any));
	}
	/**
	 * Set SupportedSite
	 * @param SiteCodeType SupportedSite
	 * @return SiteCodeType
	 */
	public function setSupportedSite($_SupportedSite)
	{
		return ($this->SupportedSite = EbayTradingTypeSiteCodeType::valueIsValid($_SupportedSite)?$_SupportedSite:null);
	}
	/**
	 * Get SupportedSite
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getSupportedSite()
	{
		return $this->SupportedSite;
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