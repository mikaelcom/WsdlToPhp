<?php
/**
 * Class file for XWebCheckOutTypeLoadReceiptsByShopperRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadReceiptsByShopperRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadReceiptsByShopperRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Shopper_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Shopper_ID;
	/**
	 * Constructor
	 * @param string Shopper_ID
	 * @return XWebCheckOutTypeLoadReceiptsByShopperRequest
	 */
	public function __construct($_Shopper_ID)
	{
		parent::__construct(array('Shopper_ID'=>$_Shopper_ID));
	}
	/**
	 * Set Shopper_ID
	 * @param string Shopper_ID
	 * @return string
	 */
	public function setShopper_ID($_Shopper_ID)
	{
		return ($this->Shopper_ID = $_Shopper_ID);
	}
	/**
	 * Get Shopper_ID
	 * @return string
	 */
	public function getShopper_ID()
	{
		return $this->Shopper_ID;
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