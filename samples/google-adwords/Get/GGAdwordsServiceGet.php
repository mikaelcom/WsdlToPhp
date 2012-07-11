<?php
/**
 * Class file for GGAdwordsServiceGet
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsServiceGet
 * @date 03/07/2012
 */
class GGAdwordsServiceGet extends GGAdwordsWsdlClass
{
	/**
	 * Method to call get
	 * Meta informations :
	 * 	- documentation : Returns the list of campaigns that meet the selector criteria. @param serviceSelector the selector specifying the {@link Campaign}s to return. @return A list of campaigns. @throws ApiException if problems occurred while fetching campaign information.
	 * @uses GGAdwordsWsdlClass::getSoapClient()
	 * @uses GGAdwordsWsdlClass::setResult()
	 * @uses GGAdwordsWsdlClass::getResult()
	 * @uses GGAdwordsWsdlClass::saveLastError()
	 * @uses GGAdwordsTypeGet::getServiceSelector()
	 * @param GGAdwordsTypeGet Get
	 * @return GGAdwordsTypeGetResponse
	 */
	public function get(GGAdwordsTypeGet $_GGAdwordsTypeGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->get(array('serviceSelector'=>$_GGAdwordsTypeGet->getServiceSelector())));
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
	 * @return GGAdwordsTypeGetResponse
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