<?php
/**
 * Class file for XiSecurityServiceList
 * @date 08/07/2012
 */
/**
 * Class XiSecurityServiceList
 * @date 08/07/2012
 */
class XiSecurityServiceList extends XiSecurityWsdlClass
{
	/**
	 * Method to call ListSecurities
	 * Meta informations :
	 * 	- documentation : List all securities mapping a specific identifier.
	 * @uses XiSecurityWsdlClass::getSoapClient()
	 * @uses XiSecurityWsdlClass::setResult()
	 * @uses XiSecurityWsdlClass::getResult()
	 * @uses XiSecurityWsdlClass::saveLastError()
	 * @uses XiSecurityTypeListSecurities::getIdentifier()
	 * @uses XiSecurityTypeListSecurities::getIdentifierType()
	 * @param XiSecurityTypeListSecurities ListSecurities
	 * @return XiSecurityTypeListSecuritiesResponse
	 */
	public function ListSecurities(XiSecurityTypeListSecurities $_XiSecurityTypeListSecurities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSecurities(array('Identifier'=>$_XiSecurityTypeListSecurities->getIdentifier(),'IdentifierType'=>$_XiSecurityTypeListSecurities->getIdentifierType())));
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
	 * @return XiSecurityTypeListSecuritiesResponse
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