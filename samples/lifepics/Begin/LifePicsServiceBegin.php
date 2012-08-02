<?php
/**
 * Class file for LifePicsServiceBegin
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceBegin
 * @date 02/08/2012
 */
class LifePicsServiceBegin extends LifePicsWsdlClass
{
	/**
	 * Method to call BeginPartnerSession
	 * Meta informations :
	 * 	- documentation : Used for beginning a session for a partner
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeBeginPartnerSession::getPartnerID()
	 * @uses LifePicsTypeBeginPartnerSession::getPassword()
	 * @param LifePicsTypeBeginPartnerSession BeginPartnerSession
	 * @return LifePicsTypeBeginPartnerSessionResponse
	 */
	public function BeginPartnerSession(LifePicsTypeBeginPartnerSession $_LifePicsTypeBeginPartnerSession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BeginPartnerSession(array('PartnerID'=>$_LifePicsTypeBeginPartnerSession->getPartnerID(),'Password'=>$_LifePicsTypeBeginPartnerSession->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call BeginMerchantSession
	 * Meta informations :
	 * 	- documentation : Used for beginning a session for a merchant
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeBeginMerchantSession::getLocationID()
	 * @uses LifePicsTypeBeginMerchantSession::getPassword()
	 * @param LifePicsTypeBeginMerchantSession BeginMerchantSession
	 * @return LifePicsTypeBeginMerchantSessionResponse
	 */
	public function BeginMerchantSession(LifePicsTypeBeginMerchantSession $_LifePicsTypeBeginMerchantSession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BeginMerchantSession(array('LocationID'=>$_LifePicsTypeBeginMerchantSession->getLocationID(),'Password'=>$_LifePicsTypeBeginMerchantSession->getPassword())));
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
	 * @return LifePicsTypeBeginPartnerSessionResponse|LifePicsTypeBeginMerchantSessionResponse
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