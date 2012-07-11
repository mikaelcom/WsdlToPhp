<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerProductRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerProductRequestType
 * Documentation : Deletes a Selling Manager product. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerProductRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the product to be deleted.
	 * @var long
	 */
	public $ProductID;
	/**
	 * Constructor
	 * @param long ProductID
	 * @return EbayTradingTypeDeleteSellingManagerProductRequestType
	 */
	public function __construct($_ProductID = null)
	{
		EbayTradingWsdlClass::__construct(array('ProductID'=>$_ProductID));
	}
	/**
	 * Set ProductID
	 * @param long ProductID
	 * @return long
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return long
	 */
	public function getProductID()
	{
		return $this->ProductID;
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