<?php
/**
 * Class file for EbayTradingTypeListingCheckoutRedirectPreferenceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingCheckoutRedirectPreferenceType
 * Documentation : ProStores listing level preferences.
 * @date 04/07/2012
 */
class EbayTradingTypeListingCheckoutRedirectPreferenceType extends EbayTradingWsdlClass
{
	/**
	 * The ProStoresStoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the ProStores store. To remove this value when revising or relisting an item, use DeletedField.
	 * @var string
	 */
	public $ProStoresStoreName;
	/**
	 * The SellerThirdPartyUsername
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user name of the ProStores store. To remove this value when revising or relisting an item, use DeletedField.
	 * @var string
	 */
	public $SellerThirdPartyUsername;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ProStoresStoreName
	 * @param string SellerThirdPartyUsername
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingCheckoutRedirectPreferenceType
	 */
	public function __construct($_ProStoresStoreName = null,$_SellerThirdPartyUsername = null,$_any = null)
	{
		parent::__construct(array('ProStoresStoreName'=>$_ProStoresStoreName,'SellerThirdPartyUsername'=>$_SellerThirdPartyUsername,'any'=>$_any));
	}
	/**
	 * Set ProStoresStoreName
	 * @param string ProStoresStoreName
	 * @return string
	 */
	public function setProStoresStoreName($_ProStoresStoreName)
	{
		return ($this->ProStoresStoreName = $_ProStoresStoreName);
	}
	/**
	 * Get ProStoresStoreName
	 * @return string
	 */
	public function getProStoresStoreName()
	{
		return $this->ProStoresStoreName;
	}
	/**
	 * Set SellerThirdPartyUsername
	 * @param string SellerThirdPartyUsername
	 * @return string
	 */
	public function setSellerThirdPartyUsername($_SellerThirdPartyUsername)
	{
		return ($this->SellerThirdPartyUsername = $_SellerThirdPartyUsername);
	}
	/**
	 * Get SellerThirdPartyUsername
	 * @return string
	 */
	public function getSellerThirdPartyUsername()
	{
		return $this->SellerThirdPartyUsername;
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