<?php
/**
 * Class file for PayPalTypeFeeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFeeType
 * Documentation : Definition of an eBay Fee type.
 * @date 14/07/2012
 */
class PayPalTypeFeeType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeAmountType
	 */
	public $Fee;
	/**
	 * Constructor
	 * @param string Name
	 * @param PayPalTypeAmountType Fee
	 * @return PayPalTypeFeeType
	 */
	public function __construct($_Name = null,$_Fee = null)
	{
		parent::__construct(array('Name'=>$_Name,'Fee'=>$_Fee));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Fee
	 * @param AmountType Fee
	 * @return AmountType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return PayPalTypeAmountType
	 */
	public function getFee()
	{
		return $this->Fee;
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