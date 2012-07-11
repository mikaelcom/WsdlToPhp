<?php
/**
 * Class file for PaylineWebPaymentTypeOption
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeOption
 * Documentation : An array of subscribed options
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeOption extends PaylineWebPaymentWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The subscribed
	 * Meta informations :
	 * 	- nillable : true
	 * @var boolean
	 */
	public $subscribed;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var dateTime
	 */
	public $endDate;
	/**
	 * Constructor
	 * @param string id
	 * @param boolean subscribed
	 * @param dateTime endDate
	 * @return PaylineWebPaymentTypeOption
	 */
	public function __construct($_id = null,$_subscribed = null,$_endDate = null)
	{
		parent::__construct(array('id'=>$_id,'subscribed'=>$_subscribed,'endDate'=>$_endDate));
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
	 * Set subscribed
	 * @param boolean subscribed
	 * @return boolean
	 */
	public function setSubscribed($_subscribed)
	{
		return ($this->subscribed = $_subscribed);
	}
	/**
	 * Get subscribed
	 * @return boolean
	 */
	public function getSubscribed()
	{
		return $this->subscribed;
	}
	/**
	 * Set endDate
	 * @param dateTime endDate
	 * @return dateTime
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->endDate;
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