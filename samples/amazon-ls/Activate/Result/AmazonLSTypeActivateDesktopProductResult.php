<?php
/**
 * Class file for AmazonLSTypeActivateDesktopProductResult
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeActivateDesktopProductResult
 * @date 10/07/2012
 */
class AmazonLSTypeActivateDesktopProductResult extends AmazonLSWsdlClass
{
	/**
	 * The UserToken
	 * @var string
	 */
	public $UserToken;
	/**
	 * The AWSAccessKeyId
	 * @var string
	 */
	public $AWSAccessKeyId;
	/**
	 * The SecretAccessKey
	 * @var string
	 */
	public $SecretAccessKey;
	/**
	 * Constructor
	 * @param string UserToken
	 * @param string AWSAccessKeyId
	 * @param string SecretAccessKey
	 * @return AmazonLSTypeActivateDesktopProductResult
	 */
	public function __construct($_UserToken = null,$_AWSAccessKeyId = null,$_SecretAccessKey = null)
	{
		parent::__construct(array('UserToken'=>$_UserToken,'AWSAccessKeyId'=>$_AWSAccessKeyId,'SecretAccessKey'=>$_SecretAccessKey));
	}
	/**
	 * Set UserToken
	 * @param string UserToken
	 * @return string
	 */
	public function setUserToken($_UserToken)
	{
		return ($this->UserToken = $_UserToken);
	}
	/**
	 * Get UserToken
	 * @return string
	 */
	public function getUserToken()
	{
		return $this->UserToken;
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
	 * Set SecretAccessKey
	 * @param string SecretAccessKey
	 * @return string
	 */
	public function setSecretAccessKey($_SecretAccessKey)
	{
		return ($this->SecretAccessKey = $_SecretAccessKey);
	}
	/**
	 * Get SecretAccessKey
	 * @return string
	 */
	public function getSecretAccessKey()
	{
		return $this->SecretAccessKey;
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