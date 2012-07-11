<?php
/**
 * Class file for AmazonLSTypeActivateHostedProductResult
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeActivateHostedProductResult
 * @date 10/07/2012
 */
class AmazonLSTypeActivateHostedProductResult extends AmazonLSWsdlClass
{
	/**
	 * The UserToken
	 * @var string
	 */
	public $UserToken;
	/**
	 * The PersistentIdentifier
	 * @var string
	 */
	public $PersistentIdentifier;
	/**
	 * Constructor
	 * @param string UserToken
	 * @param string PersistentIdentifier
	 * @return AmazonLSTypeActivateHostedProductResult
	 */
	public function __construct($_UserToken = null,$_PersistentIdentifier = null)
	{
		parent::__construct(array('UserToken'=>$_UserToken,'PersistentIdentifier'=>$_PersistentIdentifier));
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
	 * Set PersistentIdentifier
	 * @param string PersistentIdentifier
	 * @return string
	 */
	public function setPersistentIdentifier($_PersistentIdentifier)
	{
		return ($this->PersistentIdentifier = $_PersistentIdentifier);
	}
	/**
	 * Get PersistentIdentifier
	 * @return string
	 */
	public function getPersistentIdentifier()
	{
		return $this->PersistentIdentifier;
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