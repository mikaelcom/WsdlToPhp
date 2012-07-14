<?php
/**
 * Class file for PayPalTypeShippingOptionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingOptionType
 * Documentation : Fallback shipping options type.
 * @date 14/07/2012
 */
class PayPalTypeShippingOptionType extends PayPalWsdlClass
{
	/**
	 * The ShippingOptionIsDefault
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShippingOptionIsDefault;
	/**
	 * The ShippingOptionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingOptionAmount;
	/**
	 * The ShippingOptionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShippingOptionName;
	/**
	 * Constructor
	 * @param string ShippingOptionIsDefault
	 * @param PayPalTypeBasicAmountType ShippingOptionAmount
	 * @param string ShippingOptionName
	 * @return PayPalTypeShippingOptionType
	 */
	public function __construct($_ShippingOptionIsDefault = null,$_ShippingOptionAmount = null,$_ShippingOptionName = null)
	{
		parent::__construct(array('ShippingOptionIsDefault'=>$_ShippingOptionIsDefault,'ShippingOptionAmount'=>$_ShippingOptionAmount,'ShippingOptionName'=>$_ShippingOptionName));
	}
	/**
	 * Set ShippingOptionIsDefault
	 * @param string ShippingOptionIsDefault
	 * @return string
	 */
	public function setShippingOptionIsDefault($_ShippingOptionIsDefault)
	{
		return ($this->ShippingOptionIsDefault = $_ShippingOptionIsDefault);
	}
	/**
	 * Get ShippingOptionIsDefault
	 * @return string
	 */
	public function getShippingOptionIsDefault()
	{
		return $this->ShippingOptionIsDefault;
	}
	/**
	 * Set ShippingOptionAmount
	 * @param BasicAmountType ShippingOptionAmount
	 * @return BasicAmountType
	 */
	public function setShippingOptionAmount($_ShippingOptionAmount)
	{
		return ($this->ShippingOptionAmount = $_ShippingOptionAmount);
	}
	/**
	 * Get ShippingOptionAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingOptionAmount()
	{
		return $this->ShippingOptionAmount;
	}
	/**
	 * Set ShippingOptionName
	 * @param string ShippingOptionName
	 * @return string
	 */
	public function setShippingOptionName($_ShippingOptionName)
	{
		return ($this->ShippingOptionName = $_ShippingOptionName);
	}
	/**
	 * Get ShippingOptionName
	 * @return string
	 */
	public function getShippingOptionName()
	{
		return $this->ShippingOptionName;
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