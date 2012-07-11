<?php
/**
 * Class file for AmazonLSServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonLSServiceGet
 * @date 10/07/2012
 */
class AmazonLSServiceGet extends AmazonLSWsdlClass
{
	/**
	 * Method to call GetActiveSubscriptionsByPid
	 * Meta informations :
	 * 	- documentation : Gets all products that an end user is currently subscribed to for products owned by the requesting party. Note this is an authenticated request, and as such it must be signed.
	 * @uses AmazonLSWsdlClass::getSoapClient()
	 * @uses AmazonLSWsdlClass::setResult()
	 * @uses AmazonLSWsdlClass::getResult()
	 * @uses AmazonLSWsdlClass::saveLastError()
	 * @uses AmazonLSTypeGetActiveSubscriptionsByPid::getPersistentIdentifier()
	 * @param AmazonLSTypeGetActiveSubscriptionsByPid GetActiveSubscriptionsByPid
	 * @return AmazonLSTypeGetActiveSubscriptionsByPidResponse
	 */
	public function GetActiveSubscriptionsByPid(AmazonLSTypeGetActiveSubscriptionsByPid $_AmazonLSTypeGetActiveSubscriptionsByPid)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetActiveSubscriptionsByPid(array('PersistentIdentifier'=>$_AmazonLSTypeGetActiveSubscriptionsByPid->getPersistentIdentifier())));
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
	 * @return AmazonLSTypeGetActiveSubscriptionsByPidResponse
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