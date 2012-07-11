<?php
/**
 * Class file for EbayTradingTypeSetStoreRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStoreRequestType
 * Documentation : Sets the configuration of the eBay store owned by the caller.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStoreRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Store
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the Store configuration that is being set for the user.
	 * @var EbayTradingTypeStoreType
	 */
	public $Store;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreType Store
	 * @return EbayTradingTypeSetStoreRequestType
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