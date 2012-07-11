<?php
/**
 * Class file for EbayTradingTypeGetClientAlertsAuthTokenResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetClientAlertsAuthTokenResponseType
 * Documentation : Returns a Client Alerts token.
 * @date 04/07/2012
 */
class EbayTradingTypeGetClientAlertsAuthTokenResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ClientAlertsAuthToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This token string is required for the Login call in the Client Alerts API. The Client Alerts GetUserAlerts call, which returns alerts about events associated with a specific user, requires Login.
	 * @var string
	 */
	public $ClientAlertsAuthToken;
	/**
	 * The HardExpirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A Client Alerts token expires after seven days.
	 * @var dateTime
	 */
	public $HardExpirationTime;
	/**
	 * Constructor
	 * @param string ClientAlertsAuthToken
	 * @param dateTime HardExpirationTime
	 * @return EbayTradingTypeGetClientAlertsAuthTokenResponseType
	 */
	public function __construct($_ClientAlertsAuthToken = null,$_HardExpirationTime = null)
	{
		EbayTradingWsdlClass::__construct(array('ClientAlertsAuthToken'=>$_ClientAlertsAuthToken,'HardExpirationTime'=>$_HardExpirationTime));
	}
	/**
	 * Set ClientAlertsAuthToken
	 * @param string ClientAlertsAuthToken
	 * @return string
	 */
	public function setClientAlertsAuthToken($_ClientAlertsAuthToken)
	{
		return ($this->ClientAlertsAuthToken = $_ClientAlertsAuthToken);
	}
	/**
	 * Get ClientAlertsAuthToken
	 * @return string
	 */
	public function getClientAlertsAuthToken()
	{
		return $this->ClientAlertsAuthToken;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>