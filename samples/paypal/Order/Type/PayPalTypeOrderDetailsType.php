<?php
/**
 * Class file for PayPalTypeOrderDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOrderDetailsType
 * @date 14/07/2012
 */
class PayPalTypeOrderDetailsType extends PayPalWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of the Order.
	 * @var string
	 */
	public $Description;
	/**
	 * The MaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Expected maximum amount that the merchant may pull using DoReferenceTransaction
	 * @var PayPalTypeBasicAmountType
	 */
	public $MaxAmount;
	/**
	 * Constructor
	 * @param string Description
	 * @param PayPalTypeBasicAmountType MaxAmount
	 * @return PayPalTypeOrderDetailsType
	 */
	public function __construct($_Description = null,$_MaxAmount = null)
	{
		parent::__construct(array('Description'=>$_Description,'MaxAmount'=>$_MaxAmount));
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set MaxAmount
	 * @param BasicAmountType MaxAmount
	 * @return BasicAmountType
	 */
	public function setMaxAmount($_MaxAmount)
	{
		return ($this->MaxAmount = $_MaxAmount);
	}
	/**
	 * Get MaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getMaxAmount()
	{
		return $this->MaxAmount;
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