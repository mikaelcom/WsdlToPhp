<?php
/**
 * Class file for XiFundamentalsServiceList
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsServiceList
 * @date 08/07/2012
 */
class XiFundamentalsServiceList extends XiFundamentalsWsdlClass
{
	/**
	 * Method to call ListSectorsAndIndustries
	 * Meta informations :
	 * 	- documentation : Return a list of sectors and included industries.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @param XiFundamentalsTypeListSectorsAndIndustries ListSectorsAndIndustries
	 * @return XiFundamentalsTypeListSectorsAndIndustriesResponse
	 */
	public function ListSectorsAndIndustries(XiFundamentalsTypeListSectorsAndIndustries $_XiFundamentalsTypeListSectorsAndIndustries)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListSectorsAndIndustries(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListFundamentals
	 * Meta informations :
	 * 	- documentation : List all available fundamentals.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @param XiFundamentalsTypeListFundamentals ListFundamentals
	 * @return XiFundamentalsTypeListFundamentalsResponse
	 */
	public function ListFundamentals(XiFundamentalsTypeListFundamentals $_XiFundamentalsTypeListFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListFundamentals(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListExtendedValues
	 * Meta informations :
	 * 	- documentation : List extended values for fundamentals.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeListExtendedValues::getExtendedValueType()
	 * @param XiFundamentalsTypeListExtendedValues ListExtendedValues
	 * @return XiFundamentalsTypeListExtendedValuesResponse
	 */
	public function ListExtendedValues(XiFundamentalsTypeListExtendedValues $_XiFundamentalsTypeListExtendedValues)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListExtendedValues(array('ExtendedValueType'=>$_XiFundamentalsTypeListExtendedValues->getExtendedValueType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ListCompanies
	 * Meta informations :
	 * 	- documentation : List all companies for which fundamentals are provided.
	 * @uses XiFundamentalsWsdlClass::getSoapClient()
	 * @uses XiFundamentalsWsdlClass::setResult()
	 * @uses XiFundamentalsWsdlClass::getResult()
	 * @uses XiFundamentalsWsdlClass::saveLastError()
	 * @uses XiFundamentalsTypeListCompanies::getExchange()
	 * @uses XiFundamentalsTypeListCompanies::getStartSymbol()
	 * @uses XiFundamentalsTypeListCompanies::getEndSymbol()
	 * @param XiFundamentalsTypeListCompanies ListCompanies
	 * @return XiFundamentalsTypeListCompaniesResponse
	 */
	public function ListCompanies(XiFundamentalsTypeListCompanies $_XiFundamentalsTypeListCompanies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCompanies(array('Exchange'=>$_XiFundamentalsTypeListCompanies->getExchange(),'StartSymbol'=>$_XiFundamentalsTypeListCompanies->getStartSymbol(),'EndSymbol'=>$_XiFundamentalsTypeListCompanies->getEndSymbol())));
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
	 * @return XiFundamentalsTypeListCompaniesResponse
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