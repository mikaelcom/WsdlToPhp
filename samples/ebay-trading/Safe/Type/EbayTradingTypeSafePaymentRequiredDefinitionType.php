<?php
/**
 * Class file for EbayTradingTypeSafePaymentRequiredDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSafePaymentRequiredDefinitionType
 * Documentation : For the US, Canada and Australia sites, users registered after January 17,2007 are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in Item.PaymentMethods). <br> If a seller has a 'SafePaymentExempt' status, they are exempt from the category requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have one ship-to or available-to location in the US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet listings on the CAFR site with ship-to or available-to locations in the US or Australia do require a safe payment method. <br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support Item.PaymentMethods are exempt from this requirement. Therefore, listings in those categories do not require a safe payment method. <br> Currently, this field contains no other special meta-data.(An empty element is returned.) <br> Use SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine which categories require a safe payment method.
 * @date 04/07/2012
 */
class EbayTradingTypeSafePaymentRequiredDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeSafePaymentRequiredDefinitionType
	 */
	public function __construct($_any = null)
	{
		parent::__construct(array('any'=>$_any));
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