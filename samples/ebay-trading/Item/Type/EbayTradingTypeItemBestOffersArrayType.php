<?php
/**
 * Class file for EbayTradingTypeItemBestOffersArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemBestOffersArrayType
 * Documentation : A collection of details about the best offers received for a specific item. Empty if there are no best offers. Includes the buyer and seller messages only if the ReturnAll detail level is used.
 * @date 04/07/2012
 */
class EbayTradingTypeItemBestOffersArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ItemBestOffers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A collection of details about the best offers received for a specific item. Empty if there are no best offers. Includes the buyer and seller messages only if the ReturnAll detail level is used.
	 * @var EbayTradingTypeItemBestOffersType
	 */
	public $ItemBestOffers;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemBestOffersType ItemBestOffers
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemBestOffersArrayType
	 */
	public function __construct($_ItemBestOffers = null,$_any = null)
	{
		parent::__construct(array('ItemBestOffers'=>$_ItemBestOffers,'any'=>$_any));
	}
	/**
	 * Set ItemBestOffers
	 * @param ItemBestOffersType ItemBestOffers
	 * @return ItemBestOffersType
	 */
	public function setItemBestOffers($_ItemBestOffers)
	{
		return ($this->ItemBestOffers = $_ItemBestOffers);
	}
	/**
	 * Get ItemBestOffers
	 * @return EbayTradingTypeItemBestOffersType
	 */
	public function getItemBestOffers()
	{
		return $this->ItemBestOffers;
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