<?php
/**
 * Class file for AmazonECommerceServiceTypeAccessories
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeAccessories
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeAccessories extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Accessory
	 * @var AmazonECommerceServiceTypeAccessory
	 */
	public $Accessory;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeAccessory Accessory
	 * @return AmazonECommerceServiceTypeAccessories
	 */
	public function __construct($_Accessory = null)
	{
		parent::__construct(array('Accessory'=>$_Accessory));
	}
	/**
	 * Set Accessory
	 * @param Accessory Accessory
	 * @return Accessory
	 */
	public function setAccessory($_Accessory)
	{
		return ($this->Accessory = $_Accessory);
	}
	/**
	 * Get Accessory
	 * @return AmazonECommerceServiceTypeAccessory
	 */
	public function getAccessory()
	{
		return $this->Accessory;
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