<?php
/**
 * Class file for GGAdwordsTypeSoapHeader
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSoapHeader
 * Documentation : Defines the required and optional elements within the header of a SOAP request.
 * @date 03/07/2012
 */
class GGAdwordsTypeSoapHeader extends GGAdwordsWsdlClass
{
	/**
	 * The authToken
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Authentication token from Google ClientLogin API. Developers need to authenticate themselves with that API before they can send a request to AdWords API. This header identifies either the MCC manager acting on behalf of their client, or the advertiser managing their own account.
	 * @var string
	 */
	public $authToken;
	/**
	 * The clientCustomerId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Optional header: the customer id of the client of the MCC manager. Applicable only if an MCC manager, as identified by authToken, is acting on behalf of their client.
	 * @var string
	 */
	public $clientCustomerId;
	/**
	 * The developerToken
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Developer token to identify that the person making the call has enough quota.
	 * @var string
	 */
	public $developerToken;
	/**
	 * The userAgent
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : UserAgent is used to track distribution of API client programs and application usage. The client is responsible for putting in a meaningful value for tracking purposes. To be clear this is not the same as an HTTP user agent.
	 * @var string
	 */
	public $userAgent;
	/**
	 * The validateOnly
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Used to validate the request without executing it.
	 * @var boolean
	 */
	public $validateOnly;
	/**
	 * The partialFailure
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : If true, API will try to commit as many error free operations as possible and report the other operations' errors. <p>Ignored for non-mutate calls.
	 * @var boolean
	 */
	public $partialFailure;
	/**
	 * Constructor
	 * @param string authToken
	 * @param string clientCustomerId
	 * @param string developerToken
	 * @param string userAgent
	 * @param boolean validateOnly
	 * @param boolean partialFailure
	 * @return GGAdwordsTypeSoapHeader
	 */
	public function __construct($_authToken = null,$_clientCustomerId = null,$_developerToken = null,$_userAgent = null,$_validateOnly = null,$_partialFailure = null)
	{
		parent::__construct(array('authToken'=>$_authToken,'clientCustomerId'=>$_clientCustomerId,'developerToken'=>$_developerToken,'userAgent'=>$_userAgent,'validateOnly'=>$_validateOnly,'partialFailure'=>$_partialFailure));
	}
	/**
	 * Set authToken
	 * @param string authToken
	 * @return string
	 */
	public function setAuthToken($_authToken)
	{
		return ($this->authToken = $_authToken);
	}
	/**
	 * Get authToken
	 * @return string
	 */
	public function getAuthToken()
	{
		return $this->authToken;
	}
	/**
	 * Set clientCustomerId
	 * @param string clientCustomerId
	 * @return string
	 */
	public function setClientCustomerId($_clientCustomerId)
	{
		return ($this->clientCustomerId = $_clientCustomerId);
	}
	/**
	 * Get clientCustomerId
	 * @return string
	 */
	public function getClientCustomerId()
	{
		return $this->clientCustomerId;
	}
	/**
	 * Set developerToken
	 * @param string developerToken
	 * @return string
	 */
	public function setDeveloperToken($_developerToken)
	{
		return ($this->developerToken = $_developerToken);
	}
	/**
	 * Get developerToken
	 * @return string
	 */
	public function getDeveloperToken()
	{
		return $this->developerToken;
	}
	/**
	 * Set userAgent
	 * @param string userAgent
	 * @return string
	 */
	public function setUserAgent($_userAgent)
	{
		return ($this->userAgent = $_userAgent);
	}
	/**
	 * Get userAgent
	 * @return string
	 */
	public function getUserAgent()
	{
		return $this->userAgent;
	}
	/**
	 * Set validateOnly
	 * @param boolean validateOnly
	 * @return boolean
	 */
	public function setValidateOnly($_validateOnly)
	{
		return ($this->validateOnly = $_validateOnly);
	}
	/**
	 * Get validateOnly
	 * @return boolean
	 */
	public function getValidateOnly()
	{
		return $this->validateOnly;
	}
	/**
	 * Set partialFailure
	 * @param boolean partialFailure
	 * @return boolean
	 */
	public function setPartialFailure($_partialFailure)
	{
		return ($this->partialFailure = $_partialFailure);
	}
	/**
	 * Get partialFailure
	 * @return boolean
	 */
	public function getPartialFailure()
	{
		return $this->partialFailure;
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