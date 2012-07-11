<?php
/**
 * Class file for SOYellowPagesServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesServiceGet
 * @date 08/07/2012
 */
class SOYellowPagesServiceGet extends SOYellowPagesWsdlClass
{
	/**
	 * Method to call GetYPListingsByCategoryID
	 * @uses SOYellowPagesWsdlClass::getSoapClient()
	 * @uses SOYellowPagesWsdlClass::setResult()
	 * @uses SOYellowPagesWsdlClass::getResult()
	 * @uses SOYellowPagesWsdlClass::saveLastError()
	 * @uses SOYellowPagesTypeGetYPListingsByCategoryID::getCategoryID()
	 * @uses SOYellowPagesTypeGetYPListingsByCategoryID::getPostalCode()
	 * @uses SOYellowPagesTypeGetYPListingsByCategoryID::getRadius()
	 * @uses SOYellowPagesTypeGetYPListingsByCategoryID::getLicenseKey()
	 * @param SOYellowPagesTypeGetYPListingsByCategoryID GetYPListingsByCategoryID
	 * @return SOYellowPagesTypeGetYPListingsByCategoryIDResponse
	 */
	public function GetYPListingsByCategoryID(SOYellowPagesTypeGetYPListingsByCategoryID $_SOYellowPagesTypeGetYPListingsByCategoryID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYPListingsByCategoryID(array('CategoryID'=>$_SOYellowPagesTypeGetYPListingsByCategoryID->getCategoryID(),'PostalCode'=>$_SOYellowPagesTypeGetYPListingsByCategoryID->getPostalCode(),'Radius'=>$_SOYellowPagesTypeGetYPListingsByCategoryID->getRadius(),'LicenseKey'=>$_SOYellowPagesTypeGetYPListingsByCategoryID->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllYPCategories
	 * @uses SOYellowPagesWsdlClass::getSoapClient()
	 * @uses SOYellowPagesWsdlClass::setResult()
	 * @uses SOYellowPagesWsdlClass::getResult()
	 * @uses SOYellowPagesWsdlClass::saveLastError()
	 * @uses SOYellowPagesTypeGetAllYPCategories::getLicenseKey()
	 * @param SOYellowPagesTypeGetAllYPCategories GetAllYPCategories
	 * @return SOYellowPagesTypeGetAllYPCategoriesResponse
	 */
	public function GetAllYPCategories(SOYellowPagesTypeGetAllYPCategories $_SOYellowPagesTypeGetAllYPCategories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllYPCategories(array('LicenseKey'=>$_SOYellowPagesTypeGetAllYPCategories->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetYPCategoryByID
	 * @uses SOYellowPagesWsdlClass::getSoapClient()
	 * @uses SOYellowPagesWsdlClass::setResult()
	 * @uses SOYellowPagesWsdlClass::getResult()
	 * @uses SOYellowPagesWsdlClass::saveLastError()
	 * @uses SOYellowPagesTypeGetYPCategoryByID::getCategoryID()
	 * @uses SOYellowPagesTypeGetYPCategoryByID::getLicenseKey()
	 * @param SOYellowPagesTypeGetYPCategoryByID GetYPCategoryByID
	 * @return SOYellowPagesTypeGetYPCategoryByIDResponse
	 */
	public function GetYPCategoryByID(SOYellowPagesTypeGetYPCategoryByID $_SOYellowPagesTypeGetYPCategoryByID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetYPCategoryByID(array('CategoryID'=>$_SOYellowPagesTypeGetYPCategoryByID->getCategoryID(),'LicenseKey'=>$_SOYellowPagesTypeGetYPCategoryByID->getLicenseKey())));
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
	 * @return SOYellowPagesTypeGetYPCategoryByIDResponse
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