<?php
/**
 * Class file for EbayTradingTypeBuyerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerType
 * Documentation : Contains information about a user as a buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the shipping address of the buyer. See AddressType for its child elements. GetAllBidders is returning only Country and PostalCode currently. Output only.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAddressType ShippingAddress
	 * @param DOMDocument any
	 * @return EbayTradingTypeBuyerType
	 */
	public function __construct($_ShippingAddress = null,$_any = null)
	{
		parent::__construct(array('ShippingAddress'=>$_ShippingAddress,'any'=>$_any));
	}
	/**
	 * Set ShippingAddress
	 * @param AddressType ShippingAddress
	 * @return AddressType
	 */
	public function setShippingAddress($_ShippingAddress)
	{
		return ($this->ShippingAddress = $_ShippingAddress);
	}
	/**
	 * Get ShippingAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getShippingAddress()
	{
		return $this->ShippingAddress;
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