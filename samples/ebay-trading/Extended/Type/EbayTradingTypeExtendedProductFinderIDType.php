<?php
/**
 * Class file for EbayTradingTypeExtendedProductFinderIDType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExtendedProductFinderIDType
 * @date 04/07/2012
 */
class EbayTradingTypeExtendedProductFinderIDType extends EbayTradingWsdlClass
{
	/**
	 * The ProductFinderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A product finder ID. GetCategory2CS always (and only) returns this when Category.ProductFinderIDs is returned.
	 * @var int
	 */
	public $ProductFinderID;
	/**
	 * The ProductFinderBuySide
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If false or not present, the product finder can be used as input to GetProductSearchResults to search for catalog data (Pre-filled Item Information) that a seller might want to include in a listing.
	 * @var boolean
	 */
	public $ProductFinderBuySide;
	/**
	 * Constructor
	 * @param int ProductFinderID
	 * @param boolean ProductFinderBuySide
	 * @return EbayTradingTypeExtendedProductFinderIDType
	 */
	public function __construct($_ProductFinderID = null,$_ProductFinderBuySide = null)
	{
		parent::__construct(array('ProductFinderID'=>$_ProductFinderID,'ProductFinderBuySide'=>$_ProductFinderBuySide));
	}
	/**
	 * Set ProductFinderID
	 * @param int ProductFinderID
	 * @return int
	 */
	public function setProductFinderID($_ProductFinderID)
	{
		return ($this->ProductFinderID = $_ProductFinderID);
	}
	/**
	 * Get ProductFinderID
	 * @return int
	 */
	public function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
	/**
	 * Set ProductFinderBuySide
	 * @param boolean ProductFinderBuySide
	 * @return boolean
	 */
	public function setProductFinderBuySide($_ProductFinderBuySide)
	{
		return ($this->ProductFinderBuySide = $_ProductFinderBuySide);
	}
	/**
	 * Get ProductFinderBuySide
	 * @return boolean
	 */
	public function getProductFinderBuySide()
	{
		return $this->ProductFinderBuySide;
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