<?php
/**
 * Class file for AmazonLSServiceRefresh
 * @date 10/07/2012
 */
/**
 * Class AmazonLSServiceRefresh
 * @date 10/07/2012
 */
class AmazonLSServiceRefresh extends AmazonLSWsdlClass
{
	/**
	 * Method to call RefreshUserToken
	 * Meta informations :
	 * 	- documentation : Returns a new user token updated to the latest revision. Note this is an authenticated request, and as such it must be signed.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeRefreshUserToken::getUserToken()
	 * @uses AmazonLSTypeRefreshUserToken::getAdditionalTokens()
	 * @param AmazonLSTypeRefreshUserToken RefreshUserToken
	 * @return AmazonLSTypeRefreshUserTokenResponse
	 */
	public function RefreshUserToken(AmazonLSTypeRefreshUserToken $_AmazonLSTypeRefreshUserToken)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RefreshUserToken(array('UserToken'=>$_AmazonLSTypeRefreshUserToken->getUserToken(),'AdditionalTokens'=>$_AmazonLSTypeRefreshUserToken->getAdditionalTokens())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return AmazonLSTypeRefreshUserTokenResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>