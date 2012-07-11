<?php
/**
 * Class file for AmazonEc2TypeCreateKeyPairType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateKeyPairType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateKeyPairType extends AmazonEc2WsdlClass
{
	/**
	 * The keyName
	 * @var string
	 */
	public $keyName;
	/**
	 * Constructor
	 * @param string keyName
	 * @return AmazonEc2TypeCreateKeyPairType
	 */
	public function __construct($_keyName = null)
	{
		parent::__construct(array('keyName'=>$_keyName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>