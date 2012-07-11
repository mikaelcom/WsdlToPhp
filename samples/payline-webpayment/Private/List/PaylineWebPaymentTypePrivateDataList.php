<?php
/**
 * Class file for PaylineWebPaymentTypePrivateDataList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypePrivateDataList
 * Documentation : An array of private data
 * @date 10/07/2012
 */
class PaylineWebPaymentTypePrivateDataList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The privateData
	 * Meta informations :
	 * 	- maxOccurs : 100
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypePrivateData
	 */
	public $privateData;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePrivateData privateData
	 * @return PaylineWebPaymentTypePrivateDataList
	 */
	public function __construct($_privateData = null)
	{
		parent::__construct(array('privateData'=>$_privateData));
	}
	/**
	 * Set privateData
	 * @param privateData privateData
	 * @return privateData
	 */
	public function setPrivateData($_privateData)
	{
		return ($this->privateData = $_privateData);
	}
	/**
	 * Get privateData
	 * @return PaylineWebPaymentTypeprivateData
	 */
	public function getPrivateData()
	{
		return $this->privateData;
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