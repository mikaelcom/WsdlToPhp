<?php
/**
 * Class file for EbayTradingTypeListingDurationDefinitionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDurationDefinitionsType
 * Documentation : The current version of the feature. Some features (for example, ShippingTermsRequired) do not have version numbers.
 * @date 04/07/2012
 */
class EbayTradingTypeListingDurationDefinitionsType extends EbayTradingWsdlClass
{
	/**
	 * The ListingDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the duration periods that apply to a certain listing type.
	 * @var EbayTradingTypeListingDurationDefinitionType
	 */
	public $ListingDuration;
	/**
	 * The Version
	 * @var int
	 */
	public $Version;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingDurationDefinitionType ListingDuration
	 * @param int Version
	 * @return EbayTradingTypeListingDurationDefinitionsType
	 */
	public function __construct($_ListingDuration = null,$_Version = null)
	{
		parent::__construct(array('ListingDuration'=>$_ListingDuration,'Version'=>$_Version));
	}
	/**
	 * Set ListingDuration
	 * @param ListingDurationDefinitionType ListingDuration
	 * @return ListingDurationDefinitionType
	 */
	public function setListingDuration($_ListingDuration)
	{
		return ($this->ListingDuration = $_ListingDuration);
	}
	/**
	 * Get ListingDuration
	 * @return EbayTradingTypeListingDurationDefinitionType
	 */
	public function getListingDuration()
	{
		return $this->ListingDuration;
	}
	/**
	 * Set Version
	 * @param int Version
	 * @return int
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return int
	 */
	public function getVersion()
	{
		return $this->Version;
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