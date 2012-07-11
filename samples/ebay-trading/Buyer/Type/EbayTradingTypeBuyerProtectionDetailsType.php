<?php
/**
 * Class file for EbayTradingTypeBuyerProtectionDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerProtectionDetailsType
 * Documentation : Contains the data for different buyer protection schemes and the various status associated with each one of them.
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerProtectionDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The BuyerProtectionSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of Buyer Protection applicable for a particular item, such as eBay for the eBay Standard Purchase Protection Program or PayPal for the PayPal Protection Program.
	 * @var EbayTradingTypeBuyerProtectionSourceCodeType
	 */
	public $BuyerProtectionSource;
	/**
	 * The BuyerProtectionStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the status of the item's eligibility for a Buyer Protection Program.
	 * @var EbayTradingTypeBuyerProtectionCodeType
	 */
	public $BuyerProtectionStatus;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBuyerProtectionSourceCodeType BuyerProtectionSource
	 * @param EbayTradingTypeBuyerProtectionCodeType BuyerProtectionStatus
	 * @param DOMDocument any
	 * @return EbayTradingTypeBuyerProtectionDetailsType
	 */
	public function __construct($_BuyerProtectionSource = null,$_BuyerProtectionStatus = null,$_any = null)
	{
		parent::__construct(array('BuyerProtectionSource'=>$_BuyerProtectionSource,'BuyerProtectionStatus'=>$_BuyerProtectionStatus,'any'=>$_any));
	}
	/**
	 * Set BuyerProtectionSource
	 * @param BuyerProtectionSourceCodeType BuyerProtectionSource
	 * @return BuyerProtectionSourceCodeType
	 */
	public function setBuyerProtectionSource($_BuyerProtectionSource)
	{
		return ($this->BuyerProtectionSource = EbayTradingTypeBuyerProtectionSourceCodeType::valueIsValid($_BuyerProtectionSource)?$_BuyerProtectionSource:null);
	}
	/**
	 * Get BuyerProtectionSource
	 * @return EbayTradingTypeBuyerProtectionSourceCodeType
	 */
	public function getBuyerProtectionSource()
	{
		return $this->BuyerProtectionSource;
	}
	/**
	 * Set BuyerProtectionStatus
	 * @param BuyerProtectionCodeType BuyerProtectionStatus
	 * @return BuyerProtectionCodeType
	 */
	public function setBuyerProtectionStatus($_BuyerProtectionStatus)
	{
		return ($this->BuyerProtectionStatus = EbayTradingTypeBuyerProtectionCodeType::valueIsValid($_BuyerProtectionStatus)?$_BuyerProtectionStatus:null);
	}
	/**
	 * Get BuyerProtectionStatus
	 * @return EbayTradingTypeBuyerProtectionCodeType
	 */
	public function getBuyerProtectionStatus()
	{
		return $this->BuyerProtectionStatus;
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