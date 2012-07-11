<?php
/**
 * Class file for MaxMindServiceMinfraud_soap14
 * @date 08/07/2012
 */
/**
 * Class MaxMindServiceMinfraud_soap14
 * @date 08/07/2012
 */
class MaxMindServiceMinfraud_soap14 extends MaxMindWsdlClass
{
	/**
	 * Method to call minfraud_soap14
	 * @uses MaxMindWsdlClass::getSoapClient()
	 * @uses MaxMindWsdlClass::setResult()
	 * @uses MaxMindWsdlClass::getResult()
	 * @uses MaxMindWsdlClass::saveLastError()
	 * @uses MaxMindTypeMinfraud_soap14::getAccept_language()
	 * @uses MaxMindTypeMinfraud_soap14::getI()
	 * @uses MaxMindTypeMinfraud_soap14::getCity()
	 * @uses MaxMindTypeMinfraud_soap14::getRegion()
	 * @uses MaxMindTypeMinfraud_soap14::getPostal()
	 * @uses MaxMindTypeMinfraud_soap14::getCountry()
	 * @uses MaxMindTypeMinfraud_soap14::getDomain()
	 * @uses MaxMindTypeMinfraud_soap14::getBin()
	 * @uses MaxMindTypeMinfraud_soap14::getBinName()
	 * @uses MaxMindTypeMinfraud_soap14::getBinPhone()
	 * @uses MaxMindTypeMinfraud_soap14::getCustPhone()
	 * @uses MaxMindTypeMinfraud_soap14::getLicense_key()
	 * @uses MaxMindTypeMinfraud_soap14::getRequested_type()
	 * @uses MaxMindTypeMinfraud_soap14::getForwardedIP()
	 * @uses MaxMindTypeMinfraud_soap14::getEmailMD5()
	 * @uses MaxMindTypeMinfraud_soap14::getUsernameMD5()
	 * @uses MaxMindTypeMinfraud_soap14::getPasswordMD5()
	 * @uses MaxMindTypeMinfraud_soap14::getShipAddr()
	 * @uses MaxMindTypeMinfraud_soap14::getShipCity()
	 * @uses MaxMindTypeMinfraud_soap14::getShipRegion()
	 * @uses MaxMindTypeMinfraud_soap14::getShipPostal()
	 * @uses MaxMindTypeMinfraud_soap14::getShipCountry()
	 * @uses MaxMindTypeMinfraud_soap14::getTxnID()
	 * @uses MaxMindTypeMinfraud_soap14::getSessionID()
	 * @uses MaxMindTypeMinfraud_soap14::getUser_agent()
	 * @uses MaxMindTypeMinfraud_soap14::getOrder_amount()
	 * @uses MaxMindTypeMinfraud_soap14::getOrder_currency()
	 * @uses MaxMindTypeMinfraud_soap14::getShopID()
	 * @uses MaxMindTypeMinfraud_soap14::getAvs_result()
	 * @uses MaxMindTypeMinfraud_soap14::getCvv_result()
	 * @uses MaxMindTypeMinfraud_soap14::getTxn_type()
	 * @param MaxMindTypeMinfraud_soap14 Minfraud_soap14
	 * @return MaxMindTypeMinfraud_soap14Response
	 */
	public function minfraud_soap14(MaxMindTypeMinfraud_soap14 $_MaxMindTypeMinfraud_soap14)
	{
		try
		{
			$this->setResult(self::getSoapClient()->minfraud_soap14(array('accept_language'=>$_MaxMindTypeMinfraud_soap14->getAccept_language(),'i'=>$_MaxMindTypeMinfraud_soap14->getI(),'city'=>$_MaxMindTypeMinfraud_soap14->getCity(),'region'=>$_MaxMindTypeMinfraud_soap14->getRegion(),'postal'=>$_MaxMindTypeMinfraud_soap14->getPostal(),'country'=>$_MaxMindTypeMinfraud_soap14->getCountry(),'domain'=>$_MaxMindTypeMinfraud_soap14->getDomain(),'bin'=>$_MaxMindTypeMinfraud_soap14->getBin(),'binName'=>$_MaxMindTypeMinfraud_soap14->getBinName(),'binPhone'=>$_MaxMindTypeMinfraud_soap14->getBinPhone(),'custPhone'=>$_MaxMindTypeMinfraud_soap14->getCustPhone(),'license_key'=>$_MaxMindTypeMinfraud_soap14->getLicense_key(),'requested_type'=>$_MaxMindTypeMinfraud_soap14->getRequested_type(),'forwardedIP'=>$_MaxMindTypeMinfraud_soap14->getForwardedIP(),'emailMD5'=>$_MaxMindTypeMinfraud_soap14->getEmailMD5(),'usernameMD5'=>$_MaxMindTypeMinfraud_soap14->getUsernameMD5(),'passwordMD5'=>$_MaxMindTypeMinfraud_soap14->getPasswordMD5(),'shipAddr'=>$_MaxMindTypeMinfraud_soap14->getShipAddr(),'shipCity'=>$_MaxMindTypeMinfraud_soap14->getShipCity(),'shipRegion'=>$_MaxMindTypeMinfraud_soap14->getShipRegion(),'shipPostal'=>$_MaxMindTypeMinfraud_soap14->getShipPostal(),'shipCountry'=>$_MaxMindTypeMinfraud_soap14->getShipCountry(),'txnID'=>$_MaxMindTypeMinfraud_soap14->getTxnID(),'sessionID'=>$_MaxMindTypeMinfraud_soap14->getSessionID(),'user_agent'=>$_MaxMindTypeMinfraud_soap14->getUser_agent(),'order_amount'=>$_MaxMindTypeMinfraud_soap14->getOrder_amount(),'order_currency'=>$_MaxMindTypeMinfraud_soap14->getOrder_currency(),'shopID'=>$_MaxMindTypeMinfraud_soap14->getShopID(),'avs_result'=>$_MaxMindTypeMinfraud_soap14->getAvs_result(),'cvv_result'=>$_MaxMindTypeMinfraud_soap14->getCvv_result(),'txn_type'=>$_MaxMindTypeMinfraud_soap14->getTxn_type())));
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
	 * @return MaxMindTypeMinfraud_soap14Response
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