<?php
/**
 * Class file for XiHoldingsServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsServiceLookup
 * @date 08/07/2012
 */
class XiHoldingsServiceLookup extends XiHoldingsWsdlClass
{
	/**
	 * Method to call LookupManager
	 * Meta informations :
	 * 	- documentation : Lookup a manager's CIK.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeLookupManager::getName()
	 * @param XiHoldingsTypeLookupManager LookupManager
	 * @return XiHoldingsTypeLookupManagerResponse
	 */
	public function LookupManager(XiHoldingsTypeLookupManager $_XiHoldingsTypeLookupManager)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupManager(array('Name'=>$_XiHoldingsTypeLookupManager->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LookupManagerByCIK
	 * Meta informations :
	 * 	- documentation : Lookup a manager by CIK.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeLookupManagerByCIK::getCIK()
	 * @param XiHoldingsTypeLookupManagerByCIK LookupManagerByCIK
	 * @return XiHoldingsTypeLookupManagerByCIKResponse
	 */
	public function LookupManagerByCIK(XiHoldingsTypeLookupManagerByCIK $_XiHoldingsTypeLookupManagerByCIK)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupManagerByCIK(array('CIK'=>$_XiHoldingsTypeLookupManagerByCIK->getCIK())));
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
	 * @return XiHoldingsTypeLookupManagerByCIKResponse
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