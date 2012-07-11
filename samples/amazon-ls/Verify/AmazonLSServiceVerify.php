<?php
/**
 * Class file for AmazonLSServiceVerify
 * @date 10/07/2012
 */
/**
 * Class AmazonLSServiceVerify
 * @date 10/07/2012
 */
class AmazonLSServiceVerify extends AmazonLSWsdlClass
{
	/**
	 * Method to call VerifyProductSubscriptionByTokens
	 * Meta informations :
	 * 	- documentation : Allows a product to determine if the user represented by the UserToken still has an active subscription. Note this is an authenticated request, and as such it must be signed.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeVerifyProductSubscriptionByTokens::getUserToken()
	 * @uses AmazonLSTypeVerifyProductSubscriptionByTokens::getProductToken()
	 * @param AmazonLSTypeVerifyProductSubscriptionByTokens VerifyProductSubscriptionByTokens
	 * @return AmazonLSTypeVerifyProductSubscriptionByTokensResponse
	 */
	public function VerifyProductSubscriptionByTokens(AmazonLSTypeVerifyProductSubscriptionByTokens $_AmazonLSTypeVerifyProductSubscriptionByTokens)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyProductSubscriptionByTokens(array('UserToken'=>$_AmazonLSTypeVerifyProductSubscriptionByTokens->getUserToken(),'ProductToken'=>$_AmazonLSTypeVerifyProductSubscriptionByTokens->getProductToken())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call VerifyProductSubscriptionByPid
	 * Meta informations :
	 * 	- documentation : Allows a PersistentIdentifier owner to determine if the user represented by the PersistentIdentifier still has an active subscription. Note this is an authenticated request, and as such it must be signed.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeVerifyProductSubscriptionByPid::getPersistentIdentifier()
	 * @uses AmazonLSTypeVerifyProductSubscriptionByPid::getProductCode()
	 * @param AmazonLSTypeVerifyProductSubscriptionByPid VerifyProductSubscriptionByPid
	 * @return AmazonLSTypeVerifyProductSubscriptionByPidResponse
	 */
	public function VerifyProductSubscriptionByPid(AmazonLSTypeVerifyProductSubscriptionByPid $_AmazonLSTypeVerifyProductSubscriptionByPid)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyProductSubscriptionByPid(array('PersistentIdentifier'=>$_AmazonLSTypeVerifyProductSubscriptionByPid->getPersistentIdentifier(),'ProductCode'=>$_AmazonLSTypeVerifyProductSubscriptionByPid->getProductCode())));
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
	 * @return AmazonLSTypeVerifyProductSubscriptionByPidResponse
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