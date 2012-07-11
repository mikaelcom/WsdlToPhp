<?php
/**
 * Class file for XWeb1003TypeLife_Insurance
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLife_Insurance
 * @date 09/07/2012
 */
class XWeb1003TypeLife_Insurance extends XWeb1003WsdlClass
{
	/**
	 * The Net_Cash_Value
	 * @var Net_Cash_Value
	 */
	public $Net_Cash_Value;
	/**
	 * The Face_Amount
	 * @var Face_Amount
	 */
	public $Face_Amount;
	/**
	 * Constructor
	 * @param Net_Cash_Value Net_Cash_Value
	 * @param Face_Amount Face_Amount
	 * @return XWeb1003TypeLife_Insurance
	 */
	public function __construct($_Net_Cash_Value = null,$_Face_Amount = null)
	{
		parent::__construct(array('Net_Cash_Value'=>$_Net_Cash_Value,'Face_Amount'=>$_Face_Amount));
	}
	/**
	 * Set Net_Cash_Value
	 * @param Net_Cash_Value Net_Cash_Value
	 * @return Net_Cash_Value
	 */
	public function setNet_Cash_Value($_Net_Cash_Value)
	{
		return ($this->Net_Cash_Value = $_Net_Cash_Value);
	}
	/**
	 * Get Net_Cash_Value
	 * @return Net_Cash_Value
	 */
	public function getNet_Cash_Value()
	{
		return $this->Net_Cash_Value;
	}
	/**
	 * Set Face_Amount
	 * @param Face_Amount Face_Amount
	 * @return Face_Amount
	 */
	public function setFace_Amount($_Face_Amount)
	{
		return ($this->Face_Amount = $_Face_Amount);
	}
	/**
	 * Get Face_Amount
	 * @return Face_Amount
	 */
	public function getFace_Amount()
	{
		return $this->Face_Amount;
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