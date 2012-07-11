<?php
/**
 * Class file for EbayTradingTypeSellerProfilesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerProfilesType
 * Documentation : Type defining the <b>SellerProfiles</b> container, which consists of references to a seller's payment, shipping, and/or return policy profiles. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
 * @date 04/07/2012
 */
class EbayTradingTypeSellerProfilesType extends EbayTradingWsdlClass
{
	/**
	 * The SellerShippingProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist Trading API call to reference and use the values of a Business Policies shipping policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var EbayTradingTypeSellerShippingProfileType
	 */
	public $SellerShippingProfile;
	/**
	 * The SellerReturnProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist Trading API call to reference and use the values of a Business Policies return policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform.
	 * @var EbayTradingTypeSellerReturnProfileType
	 */
	public $SellerReturnProfile;
	/**
	 * The SellerPaymentProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist Trading API call to reference and use the values of a Business Policies payment policy profile. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform.
	 * @var EbayTradingTypeSellerPaymentProfileType
	 */
	public $SellerPaymentProfile;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellerShippingProfileType SellerShippingProfile
	 * @param EbayTradingTypeSellerReturnProfileType SellerReturnProfile
	 * @param EbayTradingTypeSellerPaymentProfileType SellerPaymentProfile
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerProfilesType
	 */
	public function __construct($_SellerShippingProfile = null,$_SellerReturnProfile = null,$_SellerPaymentProfile = null,$_any = null)
	{
		parent::__construct(array('SellerShippingProfile'=>$_SellerShippingProfile,'SellerReturnProfile'=>$_SellerReturnProfile,'SellerPaymentProfile'=>$_SellerPaymentProfile,'any'=>$_any));
	}
	/**
	 * Set SellerShippingProfile
	 * @param SellerShippingProfileType SellerShippingProfile
	 * @return SellerShippingProfileType
	 */
	public function setSellerShippingProfile($_SellerShippingProfile)
	{
		return ($this->SellerShippingProfile = $_SellerShippingProfile);
	}
	/**
	 * Get SellerShippingProfile
	 * @return EbayTradingTypeSellerShippingProfileType
	 */
	public function getSellerShippingProfile()
	{
		return $this->SellerShippingProfile;
	}
	/**
	 * Set SellerReturnProfile
	 * @param SellerReturnProfileType SellerReturnProfile
	 * @return SellerReturnProfileType
	 */
	public function setSellerReturnProfile($_SellerReturnProfile)
	{
		return ($this->SellerReturnProfile = $_SellerReturnProfile);
	}
	/**
	 * Get SellerReturnProfile
	 * @return EbayTradingTypeSellerReturnProfileType
	 */
	public function getSellerReturnProfile()
	{
		return $this->SellerReturnProfile;
	}
	/**
	 * Set SellerPaymentProfile
	 * @param SellerPaymentProfileType SellerPaymentProfile
	 * @return SellerPaymentProfileType
	 */
	public function setSellerPaymentProfile($_SellerPaymentProfile)
	{
		return ($this->SellerPaymentProfile = $_SellerPaymentProfile);
	}
	/**
	 * Get SellerPaymentProfile
	 * @return EbayTradingTypeSellerPaymentProfileType
	 */
	public function getSellerPaymentProfile()
	{
		return $this->SellerPaymentProfile;
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