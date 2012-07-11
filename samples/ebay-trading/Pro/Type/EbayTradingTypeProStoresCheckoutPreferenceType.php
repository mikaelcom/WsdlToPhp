<?php
/**
 * Class file for EbayTradingTypeProStoresCheckoutPreferenceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProStoresCheckoutPreferenceType
 * Documentation : Details about ProStores and checkout preferences.
 * @date 04/07/2012
 */
class EbayTradingTypeProStoresCheckoutPreferenceType extends EbayTradingWsdlClass
{
	/**
	 * The CheckoutRedirectProStores
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether third party checkout is to be redirected to the ProStores application specified via My eBay preferences.
	 * @var boolean
	 */
	public $CheckoutRedirectProStores;
	/**
	 * The ProStoresDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 0
	 * 	- documentation : Details about the store.
	 * @var EbayTradingTypeProStoresDetailsType
	 */
	public $ProStoresDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean CheckoutRedirectProStores
	 * @param EbayTradingTypeProStoresDetailsType ProStoresDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeProStoresCheckoutPreferenceType
	 */
	public function __construct($_CheckoutRedirectProStores = null,$_ProStoresDetails = null,$_any = null)
	{
		parent::__construct(array('CheckoutRedirectProStores'=>$_CheckoutRedirectProStores,'ProStoresDetails'=>$_ProStoresDetails,'any'=>$_any));
	}
	/**
	 * Set CheckoutRedirectProStores
	 * @param boolean CheckoutRedirectProStores
	 * @return boolean
	 */
	public function setCheckoutRedirectProStores($_CheckoutRedirectProStores)
	{
		return ($this->CheckoutRedirectProStores = $_CheckoutRedirectProStores);
	}
	/**
	 * Get CheckoutRedirectProStores
	 * @return boolean
	 */
	public function getCheckoutRedirectProStores()
	{
		return $this->CheckoutRedirectProStores;
	}
	/**
	 * Set ProStoresDetails
	 * @param ProStoresDetailsType ProStoresDetails
	 * @return ProStoresDetailsType
	 */
	public function setProStoresDetails($_ProStoresDetails)
	{
		return ($this->ProStoresDetails = $_ProStoresDetails);
	}
	/**
	 * Get ProStoresDetails
	 * @return EbayTradingTypeProStoresDetailsType
	 */
	public function getProStoresDetails()
	{
		return $this->ProStoresDetails;
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