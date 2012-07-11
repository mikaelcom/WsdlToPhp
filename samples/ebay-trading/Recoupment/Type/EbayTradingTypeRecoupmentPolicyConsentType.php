<?php
/**
 * Class file for EbayTradingTypeRecoupmentPolicyConsentType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRecoupmentPolicyConsentType
 * Documentation : Container for supported site information
 * @date 04/07/2012
 */
class EbayTradingTypeRecoupmentPolicyConsentType extends EbayTradingWsdlClass
{
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Site codes for sites where the Seller has agreed to cross-border trade recoupment. This means that the site where the seller is trading requires a recoupment agreement for cross-border trade, and the seller has an agreement in effect.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param DOMDocument any
	 * @return EbayTradingTypeRecoupmentPolicyConsentType
	 */
	public function __construct($_Site = null,$_any = null)
	{
		parent::__construct(array('Site'=>$_Site,'any'=>$_any));
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