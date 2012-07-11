<?php
/**
 * Class file for PaylineWebPaymentTypeSubscription
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeSubscription
 * Documentation : This element contains information about the payline package subscribed by the merchant
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeSubscription extends PaylineWebPaymentWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The option
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypeOption
	 */
	public $option;
	/**
	 * Constructor
	 * @param string id
	 * @param PaylineWebPaymentTypeOption option
	 * @return PaylineWebPaymentTypeSubscription
	 */
	public function __construct($_id = null,$_option = null)
	{
		parent::__construct(array('id'=>$_id,'option'=>$_option));
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set option
	 * @param option option
	 * @return option
	 */
	public function setOption($_option)
	{
		return ($this->option = $_option);
	}
	/**
	 * Get option
	 * @return PaylineWebPaymentTypeoption
	 */
	public function getOption()
	{
		return $this->option;
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