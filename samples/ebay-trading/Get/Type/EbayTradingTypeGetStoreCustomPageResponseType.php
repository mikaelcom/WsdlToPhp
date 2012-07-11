<?php
/**
 * Class file for EbayTradingTypeGetStoreCustomPageResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreCustomPageResponseType
 * Documentation : Contains the custom page or pages for the user's Store.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreCustomPageResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CustomPageArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The custom page or custom pages.
	 * @var EbayTradingTypeStoreCustomPageArrayType
	 */
	public $CustomPageArray;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomPageArrayType CustomPageArray
	 * @return EbayTradingTypeGetStoreCustomPageResponseType
	 */
	public function __construct($_CustomPageArray = null)
	{
		EbayTradingWsdlClass::__construct(array('CustomPageArray'=>$_CustomPageArray));
	}
	/**
	 * Set CustomPageArray
	 * @param StoreCustomPageArrayType CustomPageArray
	 * @return StoreCustomPageArrayType
	 */
	public function setCustomPageArray($_CustomPageArray)
	{
		return ($this->CustomPageArray = $_CustomPageArray);
	}
	/**
	 * Get CustomPageArray
	 * @return EbayTradingTypeStoreCustomPageArrayType
	 */
	public function getCustomPageArray()
	{
		return $this->CustomPageArray;
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