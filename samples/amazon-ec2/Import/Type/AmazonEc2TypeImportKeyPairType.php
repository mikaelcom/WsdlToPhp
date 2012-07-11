<?php
/**
 * Class file for AmazonEc2TypeImportKeyPairType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeImportKeyPairType
 * @date 10/07/2012
 */
class AmazonEc2TypeImportKeyPairType extends AmazonEc2WsdlClass
{
	/**
	 * The keyName
	 * @var string
	 */
	public $keyName;
	/**
	 * The publicKeyMaterial
	 * @var string
	 */
	public $publicKeyMaterial;
	/**
	 * Constructor
	 * @param string keyName
	 * @param string publicKeyMaterial
	 * @return AmazonEc2TypeImportKeyPairType
	 */
	public function __construct($_keyName = null,$_publicKeyMaterial = null)
	{
		parent::__construct(array('keyName'=>$_keyName,'publicKeyMaterial'=>$_publicKeyMaterial));
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
	 * Set publicKeyMaterial
	 * @param string publicKeyMaterial
	 * @return string
	 */
	public function setPublicKeyMaterial($_publicKeyMaterial)
	{
		return ($this->publicKeyMaterial = $_publicKeyMaterial);
	}
	/**
	 * Get publicKeyMaterial
	 * @return string
	 */
	public function getPublicKeyMaterial()
	{
		return $this->publicKeyMaterial;
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