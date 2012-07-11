<?php
/**
 * Class file for EbayTradingTypeNameValueListArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNameValueListArrayType
 * Documentation : A list of one or more valid names and corresponding values. Currently used for Item Specifics and Variations.
 * @date 04/07/2012
 */
class EbayTradingTypeNameValueListArrayType extends EbayTradingWsdlClass
{
	/**
	 * The NameValueList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : <b>For the AddItem family of calls:</b> Contains the name and value(s) for an Item Specific. Only required when the ItemSpecifics container is specified.<br> <br> <b>For the AddFixedPriceItem family of calls:</b> The same NameValueList schema is used for the ItemSpecifics node, the VariationSpecifics node, and the VariationSpecifcsSet node.<br> <br> If the listing has varations, any name that you use in the VariationSpecifics and VariationSpecificsSet nodes can't be used in the ItemSpecifics node.<br> <br> When you list with Item Variations:<br> a) Specify shared Item Specifics (e.g., Brand) in the ItemSpecifics node.<br> b) Specify up to five VariationSpecifics in each Variation node. <br> c) Specify all applicable names with all their supported values in the VariationSpecificSet node. <br> <br> See the Variation sample in the AddFixedPriceItem call reference for examples.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item Variations.
	 * @var EbayTradingTypeNameValueListType
	 */
	public $NameValueList;
	/**
	 * Constructor
	 * @param EbayTradingTypeNameValueListType NameValueList
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function __construct($_NameValueList = null)
	{
		parent::__construct(array('NameValueList'=>$_NameValueList));
	}
	/**
	 * Set NameValueList
	 * @param NameValueListType NameValueList
	 * @return NameValueListType
	 */
	public function setNameValueList($_NameValueList)
	{
		return ($this->NameValueList = $_NameValueList);
	}
	/**
	 * Get NameValueList
	 * @return EbayTradingTypeNameValueListType
	 */
	public function getNameValueList()
	{
		return $this->NameValueList;
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