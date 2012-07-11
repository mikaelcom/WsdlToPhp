<?php
/**
 * Class file for EbayTradingTypeStoreCustomListingHeaderLinkType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomListingHeaderLinkType
 * Documentation : Custom listing header link.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomListingHeaderLinkType extends EbayTradingWsdlClass
{
	/**
	 * The LinkID
	 * Meta informations :
	 * 	- documentation : Link ID for the listing header link. The ID is used when the link is a custom category or for a custom page, and it is not needed when the LinkType property is "AboutMe" or "None".
	 * @var int
	 */
	public $LinkID;
	/**
	 * The Order
	 * Meta informations :
	 * 	- documentation : Order in which to show the custom listing header link.
	 * @var int
	 */
	public $Order;
	/**
	 * The LinkType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of link to include in the custom listing header.
	 * @var EbayTradingTypeStoreCustomListingHeaderLinkCodeType
	 */
	public $LinkType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int LinkID
	 * @param int Order
	 * @param EbayTradingTypeStoreCustomListingHeaderLinkCodeType LinkType
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreCustomListingHeaderLinkType
	 */
	public function __construct($_LinkID = null,$_Order = null,$_LinkType = null,$_any = null)
	{
		parent::__construct(array('LinkID'=>$_LinkID,'Order'=>$_Order,'LinkType'=>$_LinkType,'any'=>$_any));
	}
	/**
	 * Set LinkID
	 * @param int LinkID
	 * @return int
	 */
	public function setLinkID($_LinkID)
	{
		return ($this->LinkID = $_LinkID);
	}
	/**
	 * Get LinkID
	 * @return int
	 */
	public function getLinkID()
	{
		return $this->LinkID;
	}
	/**
	 * Set Order
	 * @param int Order
	 * @return int
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return int
	 */
	public function getOrder()
	{
		return $this->Order;
	}
	/**
	 * Set LinkType
	 * @param StoreCustomListingHeaderLinkCodeType LinkType
	 * @return StoreCustomListingHeaderLinkCodeType
	 */
	public function setLinkType($_LinkType)
	{
		return ($this->LinkType = EbayTradingTypeStoreCustomListingHeaderLinkCodeType::valueIsValid($_LinkType)?$_LinkType:null);
	}
	/**
	 * Get LinkType
	 * @return EbayTradingTypeStoreCustomListingHeaderLinkCodeType
	 */
	public function getLinkType()
	{
		return $this->LinkType;
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