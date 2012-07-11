<?php
/**
 * Class file for EbayTradingTypeSellerShippingProfileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerShippingProfileType
 * Documentation : Type defining the <b>SellerShippingProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a Business Policies shipping policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields became available for testing in the Sandbox environment. The eBay Business Policies Management API and associated Trading API changes will go live to production in Version 775. A small percentage of sellers can start using Business Policies beginning on June 11, 2012, with 100 percent of sellers scheduled to be ramped up by July 2012. <span/>
 * @date 04/07/2012
 */
class EbayTradingTypeSellerShippingProfileType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of a Business Policies shipping policy profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist call to reference and use the shipping policy values of a Business Policies shipping policy profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>ShippingProfileID</b> value will always be returned if the listing is using a Business Policies shipping policy profile, and the <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields became available for testing in the Sandbox environment. The eBay Business Policies Management API and associated Trading API changes will go live to production in Version 775. A small percentage of sellers can start using Business Policies beginning on June 11, 2012, with 100 percent of sellers scheduled to be ramped up by July 2012. <span/>
	 * @var long
	 */
	public $ShippingProfileID;
	/**
	 * The ShippingProfileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a Business Policies shipping policy profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist call to reference and use the shipping policy values of a Business Policies shipping policy profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence. <br/><br/> In the "Get" calls, the <b>ShippingProfileID</b> value will always be returned if the listing is using a Business Policies shipping policy profile, and the <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Beginning with Version 763, the new Business Policies Management API and related Trading API containers/fields became available for testing in the Sandbox environment. The eBay Business Policies Management API and associated Trading API changes will go live to production in Version 775. A small percentage of sellers can start using Business Policies beginning on June 11, 2012, with 100 percent of sellers scheduled to be ramped up by July 2012. <span/>
	 * @var string
	 */
	public $ShippingProfileName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long ShippingProfileID
	 * @param string ShippingProfileName
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerShippingProfileType
	 */
	public function __construct($_ShippingProfileID = null,$_ShippingProfileName = null,$_any = null)
	{
		parent::__construct(array('ShippingProfileID'=>$_ShippingProfileID,'ShippingProfileName'=>$_ShippingProfileName,'any'=>$_any));
	}
	/**
	 * Set ShippingProfileID
	 * @param long ShippingProfileID
	 * @return long
	 */
	public function setShippingProfileID($_ShippingProfileID)
	{
		return ($this->ShippingProfileID = $_ShippingProfileID);
	}
	/**
	 * Get ShippingProfileID
	 * @return long
	 */
	public function getShippingProfileID()
	{
		return $this->ShippingProfileID;
	}
	/**
	 * Set ShippingProfileName
	 * @param string ShippingProfileName
	 * @return string
	 */
	public function setShippingProfileName($_ShippingProfileName)
	{
		return ($this->ShippingProfileName = $_ShippingProfileName);
	}
	/**
	 * Get ShippingProfileName
	 * @return string
	 */
	public function getShippingProfileName()
	{
		return $this->ShippingProfileName;
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