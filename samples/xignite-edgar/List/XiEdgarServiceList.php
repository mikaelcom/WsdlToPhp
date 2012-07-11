<?php
/**
 * Class file for XiEdgarServiceList
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceList
 * @date 08/07/2012
 */
class XiEdgarServiceList extends XiEdgarWsdlClass
{
	/**
	 * Method to call ListSECFilingTypes
	 * Meta informations :
	 * 	- documentation : List typical SEC submissions with a description.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeListSECFilingTypes::getName()
	 * @param XiEdgarTypeListSECFilingTypes ListSECFilingTypes
	 * @return XiEdgarTypeListSECFilingTypesResponse
	 */
	public function ListSECFilingTypes(XiEdgarTypeListSECFilingTypes $_XiEdgarTypeListSECFilingTypes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSECFilingTypes(array('Name'=>$_XiEdgarTypeListSECFilingTypes->getName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListSICCodes
	 * Meta informations :
	 * 	- documentation : List SIC codes.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeListSICCodes::getName()
	 * @param XiEdgarTypeListSICCodes ListSICCodes
	 * @return XiEdgarTypeListSICCodesResponse
	 */
	public function ListSICCodes(XiEdgarTypeListSICCodes $_XiEdgarTypeListSICCodes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSICCodes(array('Name'=>$_XiEdgarTypeListSICCodes->getName())));
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
	 * @return XiEdgarTypeListSICCodesResponse
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