<?php
/**
 * Class file for OvhTypeTelephonyAliasToLinePossibilityPriceStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAliasToLinePossibilityPriceStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyAliasToLinePossibilityPriceStruct extends OvhWsdlClass
{
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The price
	 * @var string
	 */
	public $price;
	/**
	 * Constructor
	 * @param string offer
	 * @param string price
	 * @return OvhTypeTelephonyAliasToLinePossibilityPriceStruct
	 */
	public function __construct($_offer = null,$_price = null)
	{
		parent::__construct(array('offer'=>$_offer,'price'=>$_price));
	}
	/**
	 * Set offer
	 * @param string offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get offer
	 * @return string
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set price
	 * @param string price
	 * @return string
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price
	 * @return string
	 */
	public function getPrice()
	{
		return $this->price;
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