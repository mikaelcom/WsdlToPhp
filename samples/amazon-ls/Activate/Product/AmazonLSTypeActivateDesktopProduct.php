<?php
/**
 * Class file for AmazonLSTypeActivateDesktopProduct
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeActivateDesktopProduct
 * @date 10/07/2012
 */
class AmazonLSTypeActivateDesktopProduct extends AmazonLSWsdlClass
{
	/**
	 * The ActivationKey
	 * @var string
	 */
	public $ActivationKey;
	/**
	 * The ProductToken
	 * @var string
	 */
	public $ProductToken;
	/**
	 * The TokenExpiration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var duration
	 */
	public $TokenExpiration;
	/**
	 * Constructor
	 * @param string ActivationKey
	 * @param string ProductToken
	 * @param duration TokenExpiration
	 * @return AmazonLSTypeActivateDesktopProduct
	 */
	public function __construct($_ActivationKey = null,$_ProductToken = null,$_TokenExpiration = null)
	{
		parent::__construct(array('ActivationKey'=>$_ActivationKey,'ProductToken'=>$_ProductToken,'TokenExpiration'=>$_TokenExpiration));
	}
	/**
	 * Set ActivationKey
	 * @param string ActivationKey
	 * @return string
	 */
	public function setActivationKey($_ActivationKey)
	{
		return ($this->ActivationKey = $_ActivationKey);
	}
	/**
	 * Get ActivationKey
	 * @return string
	 */
	public function getActivationKey()
	{
		return $this->ActivationKey;
	}
	/**
	 * Set ProductToken
	 * @param string ProductToken
	 * @return string
	 */
	public function setProductToken($_ProductToken)
	{
		return ($this->ProductToken = $_ProductToken);
	}
	/**
	 * Get ProductToken
	 * @return string
	 */
	public function getProductToken()
	{
		return $this->ProductToken;
	}
	/**
	 * Set TokenExpiration
	 * @param duration TokenExpiration
	 * @return duration
	 */
	public function setTokenExpiration($_TokenExpiration)
	{
		return ($this->TokenExpiration = $_TokenExpiration);
	}
	/**
	 * Get TokenExpiration
	 * @return duration
	 */
	public function getTokenExpiration()
	{
		return $this->TokenExpiration;
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