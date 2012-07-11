<?php
/**
 * Class file for EbayTradingTypeFetchTokenResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFetchTokenResponseType
 * Documentation : Includes the authentication token for the user and the date it expires.
 * @date 04/07/2012
 */
class EbayTradingTypeFetchTokenResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The eBayAuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The authentication token for the user.
	 * @var string
	 */
	public $eBayAuthToken;
	/**
	 * The HardExpirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time at which the token returned in eBayAuthToken expires and can no longer be used to authenticate the user for that application.
	 * @var dateTime
	 */
	public $HardExpirationTime;
	/**
	 * The RESTToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The REST authentication token for the user.
	 * @var string
	 */
	public $RESTToken;
	/**
	 * Constructor
	 * @param string eBayAuthToken
	 * @param dateTime HardExpirationTime
	 * @param string RESTToken
	 * @return EbayTradingTypeFetchTokenResponseType
	 */
	public function __construct($_eBayAuthToken = null,$_HardExpirationTime = null,$_RESTToken = null)
	{
		EbayTradingWsdlClass::__construct(array('eBayAuthToken'=>$_eBayAuthToken,'HardExpirationTime'=>$_HardExpirationTime,'RESTToken'=>$_RESTToken));
	}
	/**
	 * Set eBayAuthToken
	 * @param string eBayAuthToken
	 * @return string
	 */
	public function setEBayAuthToken($_eBayAuthToken)
	{
		return ($this->eBayAuthToken = $_eBayAuthToken);
	}
	/**
	 * Get eBayAuthToken
	 * @return string
	 */
	public function getEBayAuthToken()
	{
		return $this->eBayAuthToken;
	}
	/**
	 * Set HardExpirationTime
	 * @param dateTime HardExpirationTime
	 * @return dateTime
	 */
	public function setHardExpirationTime($_HardExpirationTime)
	{
		return ($this->HardExpirationTime = $_HardExpirationTime);
	}
	/**
	 * Get HardExpirationTime
	 * @return dateTime
	 */
	public function getHardExpirationTime()
	{
		return $this->HardExpirationTime;
	}
	/**
	 * Set RESTToken
	 * @param string RESTToken
	 * @return string
	 */
	public function setRESTToken($_RESTToken)
	{
		return ($this->RESTToken = $_RESTToken);
	}
	/**
	 * Get RESTToken
	 * @return string
	 */
	public function getRESTToken()
	{
		return $this->RESTToken;
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