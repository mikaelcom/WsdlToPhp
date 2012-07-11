<?php
/**
 * Class file for XiIndicesServiceList
 * @date 08/07/2012
 */
/**
 * Class XiIndicesServiceList
 * @date 08/07/2012
 */
class XiIndicesServiceList extends XiIndicesWsdlClass
{
	/**
	 * Method to call ListIndices
	 * Meta informations :
	 * 	- documentation : Lists available indices.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @param XiIndicesTypeListIndices ListIndices
	 * @return XiIndicesTypeListIndicesResponse
	 */
	public function ListIndices(XiIndicesTypeListIndices $_XiIndicesTypeListIndices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndices(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListAllIndices
	 * Meta informations :
	 * 	- documentation : Lists all available indices.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @param XiIndicesTypeListAllIndices ListAllIndices
	 * @return XiIndicesTypeListAllIndicesResponse
	 */
	public function ListAllIndices(XiIndicesTypeListAllIndices $_XiIndicesTypeListAllIndices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListAllIndices(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIndexCriteria
	 * Meta informations :
	 * 	- documentation : Lists available indices.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeListIndexCriteria::getCriteriaType()
	 * @param XiIndicesTypeListIndexCriteria ListIndexCriteria
	 * @return XiIndicesTypeListIndexCriteriaResponse
	 */
	public function ListIndexCriteria(XiIndicesTypeListIndexCriteria $_XiIndicesTypeListIndexCriteria)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndexCriteria(array('CriteriaType'=>$_XiIndicesTypeListIndexCriteria->getCriteriaType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIndicesByFamily
	 * Meta informations :
	 * 	- documentation : Lists available indices by index family.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeListIndicesByFamily::getFamily()
	 * @param XiIndicesTypeListIndicesByFamily ListIndicesByFamily
	 * @return XiIndicesTypeListIndicesByFamilyResponse
	 */
	public function ListIndicesByFamily(XiIndicesTypeListIndicesByFamily $_XiIndicesTypeListIndicesByFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndicesByFamily(array('Family'=>$_XiIndicesTypeListIndicesByFamily->getFamily())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIndicesByCountry
	 * Meta informations :
	 * 	- documentation : Lists available indices by country.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeListIndicesByCountry::getCountry()
	 * @param XiIndicesTypeListIndicesByCountry ListIndicesByCountry
	 * @return XiIndicesTypeListIndicesByCountryResponse
	 */
	public function ListIndicesByCountry(XiIndicesTypeListIndicesByCountry $_XiIndicesTypeListIndicesByCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndicesByCountry(array('Country'=>$_XiIndicesTypeListIndicesByCountry->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListIndicesBySector
	 * Meta informations :
	 * 	- documentation : Lists available indices by sector.
	 * @uses XiIndicesWsdlClass::getSoapClient()
	 * @uses XiIndicesWsdlClass::setResult()
	 * @uses XiIndicesWsdlClass::getResult()
	 * @uses XiIndicesWsdlClass::saveLastError()
	 * @uses XiIndicesTypeListIndicesBySector::getSector()
	 * @param XiIndicesTypeListIndicesBySector ListIndicesBySector
	 * @return XiIndicesTypeListIndicesBySectorResponse
	 */
	public function ListIndicesBySector(XiIndicesTypeListIndicesBySector $_XiIndicesTypeListIndicesBySector)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListIndicesBySector(array('Sector'=>$_XiIndicesTypeListIndicesBySector->getSector())));
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
	 * @return XiIndicesTypeListIndicesBySectorResponse
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