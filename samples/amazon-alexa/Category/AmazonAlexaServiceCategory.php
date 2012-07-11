<?php
/**
 * Class file for AmazonAlexaServiceCategory
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceCategory
 * @date 10/07/2012
 */
class AmazonAlexaServiceCategory extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call CategoryBrowse
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeCategoryBrowse::getRequest()
	 * @param AmazonAlexaTypeCategoryBrowse CategoryBrowse
	 * @return AmazonAlexaTypeCategoryBrowseResponse
	 */
	public function CategoryBrowse(AmazonAlexaTypeCategoryBrowse $_AmazonAlexaTypeCategoryBrowse)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CategoryBrowse(array('Request'=>$_AmazonAlexaTypeCategoryBrowse->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CategoryListings
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeCategoryListings::getRequest()
	 * @param AmazonAlexaTypeCategoryListings CategoryListings
	 * @return AmazonAlexaTypeCategoryListingsResponse
	 */
	public function CategoryListings(AmazonAlexaTypeCategoryListings $_AmazonAlexaTypeCategoryListings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CategoryListings(array('Request'=>$_AmazonAlexaTypeCategoryListings->getRequest())));
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
	 * @return AmazonAlexaTypeCategoryListingsResponse
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