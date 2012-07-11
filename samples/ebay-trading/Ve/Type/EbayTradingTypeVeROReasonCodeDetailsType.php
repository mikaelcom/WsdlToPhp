<?php
/**
 * Class file for EbayTradingTypeVeROReasonCodeDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReasonCodeDetailsType
 * Documentation : Container for reason code details for all sites.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReasonCodeDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The VeROSiteDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains reason code details for a site.
	 * @var EbayTradingTypeVeROSiteDetailType
	 */
	public $VeROSiteDetail;
	/**
	 * Constructor
	 * @param EbayTradingTypeVeROSiteDetailType VeROSiteDetail
	 * @return EbayTradingTypeVeROReasonCodeDetailsType
	 */
	public function __construct($_VeROSiteDetail = null)
	{
		parent::__construct(array('VeROSiteDetail'=>$_VeROSiteDetail));
	}
	/**
	 * Set VeROSiteDetail
	 * @param VeROSiteDetailType VeROSiteDetail
	 * @return VeROSiteDetailType
	 */
	public function setVeROSiteDetail($_VeROSiteDetail)
	{
		return ($this->VeROSiteDetail = $_VeROSiteDetail);
	}
	/**
	 * Get VeROSiteDetail
	 * @return EbayTradingTypeVeROSiteDetailType
	 */
	public function getVeROSiteDetail()
	{
		return $this->VeROSiteDetail;
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