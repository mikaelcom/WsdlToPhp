<?php
/**
 * Class file for AmazonAlexaTypeSecurity
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeSecurity
 * @date 10/07/2012
 */
class AmazonAlexaTypeSecurity extends AmazonAlexaWsdlClass
{
	/**
	 * The AWSAccessKeyId
	 * @var string
	 */
	public $AWSAccessKeyId;
	/**
	 * The Signature
	 * @var string
	 */
	public $Signature;
	/**
	 * The Timestamp
	 * @var string
	 */
	public $Timestamp;
	/**
	 * Constructor
	 * @param string AWSAccessKeyId
	 * @param string Signature
	 * @param string Timestamp
	 * @return AmazonAlexaTypeSecurity
	 */
	public function __construct($_AWSAccessKeyId = null,$_Signature = null,$_Timestamp = null)
	{
		parent::__construct(array('AWSAccessKeyId'=>$_AWSAccessKeyId,'Signature'=>$_Signature,'Timestamp'=>$_Timestamp));
	}
	/**
	 * Set AWSAccessKeyId
	 * @param string AWSAccessKeyId
	 * @return string
	 */
	public function setAWSAccessKeyId($_AWSAccessKeyId)
	{
		return ($this->AWSAccessKeyId = $_AWSAccessKeyId);
	}
	/**
	 * Get AWSAccessKeyId
	 * @return string
	 */
	public function getAWSAccessKeyId()
	{
		return $this->AWSAccessKeyId;
	}
	/**
	 * Set Signature
	 * @param string Signature
	 * @return string
	 */
	public function setSignature($_Signature)
	{
		return ($this->Signature = $_Signature);
	}
	/**
	 * Get Signature
	 * @return string
	 */
	public function getSignature()
	{
		return $this->Signature;
	}
	/**
	 * Set Timestamp
	 * @param string Timestamp
	 * @return string
	 */
	public function setTimestamp($_Timestamp)
	{
		return ($this->Timestamp = $_Timestamp);
	}
	/**
	 * Get Timestamp
	 * @return string
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
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