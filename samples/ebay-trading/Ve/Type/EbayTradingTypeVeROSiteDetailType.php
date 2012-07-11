<?php
/**
 * Class file for EbayTradingTypeVeROSiteDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROSiteDetailType
 * Documentation : Container for reason code details for a given site.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROSiteDetailType extends EbayTradingWsdlClass
{
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The site for which reason code details are returned.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The ReasonCodeDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains details for a given reason code.
	 * @var EbayTradingTypeReasonCodeDetailType
	 */
	public $ReasonCodeDetail;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param EbayTradingTypeReasonCodeDetailType ReasonCodeDetail
	 * @param DOMDocument any
	 * @return EbayTradingTypeVeROSiteDetailType
	 */
	public function __construct($_Site = null,$_ReasonCodeDetail = null,$_any = null)
	{
		parent::__construct(array('Site'=>$_Site,'ReasonCodeDetail'=>$_ReasonCodeDetail,'any'=>$_any));
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
	 * Set ReasonCodeDetail
	 * @param ReasonCodeDetailType ReasonCodeDetail
	 * @return ReasonCodeDetailType
	 */
	public function setReasonCodeDetail($_ReasonCodeDetail)
	{
		return ($this->ReasonCodeDetail = $_ReasonCodeDetail);
	}
	/**
	 * Get ReasonCodeDetail
	 * @return EbayTradingTypeReasonCodeDetailType
	 */
	public function getReasonCodeDetail()
	{
		return $this->ReasonCodeDetail;
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