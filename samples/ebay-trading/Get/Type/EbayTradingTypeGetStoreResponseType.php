<?php
/**
 * Class file for EbayTradingTypeGetStoreResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreResponseType
 * Documentation : Returns the data describing a seller's eBay store, including name, description, URL, and other information. The caller making the request must be the owner of an eBay store. If the authenticated caller does not have an eBay store, the response is an error. A successful response contains either the complete store configuration or information about the category hierarchy for the store only.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Store
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data describing the store configuration.
	 * @var EbayTradingTypeStoreType
	 */
	public $Store;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreType Store
	 * @return EbayTradingTypeGetStoreResponseType
	 */
	public function __construct($_Store = null)
	{
		EbayTradingWsdlClass::__construct(array('Store'=>$_Store));
	}
	/**
	 * Set Store
	 * @param StoreType Store
	 * @return StoreType
	 */
	public function setStore($_Store)
	{
		return ($this->Store = $_Store);
	}
	/**
	 * Get Store
	 * @return EbayTradingTypeStoreType
	 */
	public function getStore()
	{
		return $this->Store;
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