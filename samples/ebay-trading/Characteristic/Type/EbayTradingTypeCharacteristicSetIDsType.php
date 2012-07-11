<?php
/**
 * Class file for EbayTradingTypeCharacteristicSetIDsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharacteristicSetIDsType
 * Documentation : A list of one or more characteristic set IDs.
 * @date 04/07/2012
 */
class EbayTradingTypeCharacteristicSetIDsType extends EbayTradingWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Numeric identifier for a domain (characteristic set).<br> <br> For GetProducts (for buying tools), you can use the list of catalog-enabled attribute sets in the documentation (see link below).<br> <br> For GetProductSearchResults (for selling tools), it's best to use GetCategory2CS to determine mappings between categories and characteristic sets that are flagged as CatalogEnabled.
	 * @var string
	 */
	public $ID;
	/**
	 * Constructor
	 * @param string ID
	 * @return EbayTradingTypeCharacteristicSetIDsType
	 */
	public function __construct($_ID = null)
	{
		parent::__construct(array('ID'=>$_ID));
	}
	/**
	 * Set ID
	 * @param string ID
	 * @return string
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return string
	 */
	public function getID()
	{
		return $this->ID;
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