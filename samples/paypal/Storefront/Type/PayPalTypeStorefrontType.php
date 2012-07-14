<?php
/**
 * Class file for PayPalTypeStorefrontType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeStorefrontType
 * Documentation : Contains the eBay Stores-specific item attributes department number and store location. StorefrontInfo is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Returned as null for international fixed price items.
 * @date 14/07/2012
 */
class PayPalTypeStorefrontType extends PayPalWsdlClass
{
	/**
	 * The StoreCategoryID
	 * @var int
	 */
	public $StoreCategoryID;
	/**
	 * The StoreURL
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * Constructor
	 * @param int StoreCategoryID
	 * @param anyURI StoreURL
	 * @return PayPalTypeStorefrontType
	 */
	public function __construct($_StoreCategoryID = null,$_StoreURL = null)
	{
		parent::__construct(array('StoreCategoryID'=>$_StoreCategoryID,'StoreURL'=>$_StoreURL));
	}
	/**
	 * Set StoreCategoryID
	 * @param int StoreCategoryID
	 * @return int
	 */
	public function setStoreCategoryID($_StoreCategoryID)
	{
		return ($this->StoreCategoryID = $_StoreCategoryID);
	}
	/**
	 * Get StoreCategoryID
	 * @return int
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * Set StoreURL
	 * @param anyURI StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_StoreURL)
	{
		return ($this->StoreURL = $_StoreURL);
	}
	/**
	 * Get StoreURL
	 * @return anyURI
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
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