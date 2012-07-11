<?php
/**
 * Class file for EbayTradingTypeFetchTokenRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFetchTokenRequestType
 * Documentation : Retrieves an authentication token for a user.&nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeFetchTokenRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SecretID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value associated with the token retrieval request. SecretID is defined by the application, and is passed in the redirect URL to the eBay sign-in page. eBay recommends using a UUID for the secret ID value. You must also set Username (part of the RequesterCredentials) for the particular user of interest. SecretID and Username are not required if SessionID is present.
	 * @var string
	 */
	public $SecretID;
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value associated with the token retrieval request. eBay generates the session ID when the application makes a GetSessionID request. SessionID is passed in the redirect URL to the eBay sign-in page. The advantage of using SessionID is that it does not require UserID as part of the FetchToken request. SessionID is not required if SecretID is present.
	 * @var string
	 */
	public $SessionID;
	/**
	 * Constructor
	 * @param string SecretID
	 * @param string SessionID
	 * @return EbayTradingTypeFetchTokenRequestType
	 */
	public function __construct($_SecretID = null,$_SessionID = null)
	{
		EbayTradingWsdlClass::__construct(array('SecretID'=>$_SecretID,'SessionID'=>$_SessionID));
	}
	/**
	 * Set SecretID
	 * @param string SecretID
	 * @return string
	 */
	public function setSecretID($_SecretID)
	{
		return ($this->SecretID = $_SecretID);
	}
	/**
	 * Get SecretID
	 * @return string
	 */
	public function getSecretID()
	{
		return $this->SecretID;
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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