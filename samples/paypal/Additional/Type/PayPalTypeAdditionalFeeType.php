<?php
/**
 * Class file for PayPalTypeAdditionalFeeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAdditionalFeeType
 * @date 14/07/2012
 */
class PayPalTypeAdditionalFeeType extends PayPalWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * Constructor
	 * @param string Type
	 * @param PayPalTypeBasicAmountType Amount
	 * @return PayPalTypeAdditionalFeeType
	 */
	public function __construct($_Type = null,$_Amount = null)
	{
		parent::__construct(array('Type'=>$_Type,'Amount'=>$_Amount));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
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