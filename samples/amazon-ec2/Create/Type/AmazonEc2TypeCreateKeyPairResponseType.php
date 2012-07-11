<?php
/**
 * Class file for AmazonEc2TypeCreateKeyPairResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateKeyPairResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateKeyPairResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The keyName
	 * @var string
	 */
	public $keyName;
	/**
	 * The keyFingerprint
	 * @var string
	 */
	public $keyFingerprint;
	/**
	 * The keyMaterial
	 * @var string
	 */
	public $keyMaterial;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string keyName
	 * @param string keyFingerprint
	 * @param string keyMaterial
	 * @return AmazonEc2TypeCreateKeyPairResponseType
	 */
	public function __construct($_requestId = null,$_keyName = null,$_keyFingerprint = null,$_keyMaterial = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'keyName'=>$_keyName,'keyFingerprint'=>$_keyFingerprint,'keyMaterial'=>$_keyMaterial));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set keyName
	 * @param string keyName
	 * @return string
	 */
	public function setKeyName($_keyName)
	{
		return ($this->keyName = $_keyName);
	}
	/**
	 * Get keyName
	 * @return string
	 */
	public function getKeyName()
	{
		return $this->keyName;
	}
	/**
	 * Set keyFingerprint
	 * @param string keyFingerprint
	 * @return string
	 */
	public function setKeyFingerprint($_keyFingerprint)
	{
		return ($this->keyFingerprint = $_keyFingerprint);
	}
	/**
	 * Get keyFingerprint
	 * @return string
	 */
	public function getKeyFingerprint()
	{
		return $this->keyFingerprint;
	}
	/**
	 * Set keyMaterial
	 * @param string keyMaterial
	 * @return string
	 */
	public function setKeyMaterial($_keyMaterial)
	{
		return ($this->keyMaterial = $_keyMaterial);
	}
	/**
	 * Get keyMaterial
	 * @return string
	 */
	public function getKeyMaterial()
	{
		return $this->keyMaterial;
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