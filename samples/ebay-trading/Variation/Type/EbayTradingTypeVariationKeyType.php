<?php
/**
 * Class file for EbayTradingTypeVariationKeyType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationKeyType
 * Documentation : Used to provide input for ItemID and VariationSpecific
 * @date 04/07/2012
 */
class EbayTradingTypeVariationKeyType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item whose variation(s) should be added to or removed from the watch list.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name-value pairs that identify a variation within the listing identified by VariationKey.ItemID. or that partially match one or more variations. Names may not be duplicated in the same VariationSpecifics container. If the specified pairs do not match any variation, the call behaves as if no variations were specified.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecifics
	 * @param DOMDocument any
	 * @return EbayTradingTypeVariationKeyType
	 */
	public function __construct($_ItemID = null,$_VariationSpecifics = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'VariationSpecifics'=>$_VariationSpecifics,'any'=>$_any));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set VariationSpecifics
	 * @param NameValueListArrayType VariationSpecifics
	 * @return NameValueListArrayType
	 */
	public function setVariationSpecifics($_VariationSpecifics)
	{
		return ($this->VariationSpecifics = $_VariationSpecifics);
	}
	/**
	 * Get VariationSpecifics
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
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