<?php
/**
 * Class file for ConeSearchServiceCone
 * @date 13/10/2012
 */
/**
 * Class ConeSearchServiceCone
 * @date 13/10/2012
 */
class ConeSearchServiceCone extends ConeSearchWsdlClass
{
	/**
	 * Method to call ConeSearch
	 * Meta informations :
	 * 	- documentation : ConeSearch from the Sloan Digital Sky Survey
	 * @uses ConeSearchWsdlClass::getSoapClient()
	 * @uses ConeSearchWsdlClass::setResult()
	 * @uses ConeSearchWsdlClass::getResult()
	 * @uses ConeSearchWsdlClass::saveLastError()
	 * @uses ConeSearchTypeConeSearch::getRa()
	 * @uses ConeSearchTypeConeSearch::getDec()
	 * @uses ConeSearchTypeConeSearch::getSr()
	 * @param ConeSearchTypeConeSearch ConeSearch
	 * @return ConeSearchTypeConeSearchResponse
	 */
	public function ConeSearch(ConeSearchTypeConeSearch $_ConeSearchTypeConeSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConeSearch(array('ra'=>$_ConeSearchTypeConeSearch->getRa(),'dec'=>$_ConeSearchTypeConeSearch->getDec(),'sr'=>$_ConeSearchTypeConeSearch->getSr())));
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
	 * @return ConeSearchTypeConeSearchResponse
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