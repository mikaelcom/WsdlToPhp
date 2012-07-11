<?php
/**
 * Class file for AmazonLSTypeRefreshUserToken
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeRefreshUserToken
 * @date 10/07/2012
 */
class AmazonLSTypeRefreshUserToken extends AmazonLSWsdlClass
{
	/**
	 * The UserToken
	 * @var string
	 */
	public $UserToken;
	/**
	 * The AdditionalTokens
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AdditionalTokens;
	/**
	 * Constructor
	 * @param string UserToken
	 * @param string AdditionalTokens
	 * @return AmazonLSTypeRefreshUserToken
	 */
	public function __construct($_UserToken = null,$_AdditionalTokens = null)
	{
		parent::__construct(array('UserToken'=>$_UserToken,'AdditionalTokens'=>$_AdditionalTokens));
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
	 * Set AdditionalTokens
	 * @param string AdditionalTokens
	 * @return string
	 */
	public function setAdditionalTokens($_AdditionalTokens)
	{
		return ($this->AdditionalTokens = $_AdditionalTokens);
	}
	/**
	 * Get AdditionalTokens
	 * @return string
	 */
	public function getAdditionalTokens()
	{
		return $this->AdditionalTokens;
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