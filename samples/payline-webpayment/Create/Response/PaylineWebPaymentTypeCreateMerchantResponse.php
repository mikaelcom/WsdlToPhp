<?php
/**
 * Class file for PaylineWebPaymentTypeCreateMerchantResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeCreateMerchantResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeCreateMerchantResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The connectionData
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeConnectionData
	 */
	public $connectionData;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeConnectionData connectionData
	 * @return PaylineWebPaymentTypeCreateMerchantResponse
	 */
	public function __construct($_result = null,$_connectionData = null)
	{
		parent::__construct(array('result'=>$_result,'connectionData'=>$_connectionData));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set connectionData
	 * @param connectionData connectionData
	 * @return connectionData
	 */
	public function setConnectionData($_connectionData)
	{
		return ($this->connectionData = $_connectionData);
	}
	/**
	 * Get connectionData
	 * @return PaylineWebPaymentTypeconnectionData
	 */
	public function getConnectionData()
	{
		return $this->connectionData;
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