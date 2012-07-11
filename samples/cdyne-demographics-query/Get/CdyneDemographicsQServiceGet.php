<?php
/**
 * Class file for CdyneDemographicsQServiceGet
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQServiceGet
 * @date 03/07/2012
 */
class CdyneDemographicsQServiceGet extends CdyneDemographicsQWsdlClass
{
	/**
	 * Method to call GetLocationInformationByLatitudeLongitude
	 * Meta informations :
	 * 	- documentation : This function will return Summary Information about a location via Longitude and Latitude. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude::getLatitude()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude::getLongitude()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude::getLicenseKey()
	 * @param CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude GetLocationInformationByLatitudeLongitude
	 * @return CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitudeResponse
	 */
	public function GetLocationInformationByLatitudeLongitude(CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude $_CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLocationInformationByLatitudeLongitude(array('Latitude'=>$_CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude->getLatitude(),'Longitude'=>$_CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude->getLongitude(),'LicenseKey'=>$_CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitude->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLocationInformationByAddress
	 * Meta informations :
	 * 	- documentation : This function will return Summary Information about a location via the Address. Address Line 2 is not needed for Summary information. For more advanced address information use CDYNE's Postal Address Corrector. <b>This method is the best place to start!</b> Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByAddress::getAddressLine1()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByAddress::getCity()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByAddress::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByAddress::getZipCode()
	 * @uses CdyneDemographicsQTypeGetLocationInformationByAddress::getLicenseKey()
	 * @param CdyneDemographicsQTypeGetLocationInformationByAddress GetLocationInformationByAddress
	 * @return CdyneDemographicsQTypeGetLocationInformationByAddressResponse
	 */
	public function GetLocationInformationByAddress(CdyneDemographicsQTypeGetLocationInformationByAddress $_CdyneDemographicsQTypeGetLocationInformationByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLocationInformationByAddress(array('AddressLine1'=>$_CdyneDemographicsQTypeGetLocationInformationByAddress->getAddressLine1(),'City'=>$_CdyneDemographicsQTypeGetLocationInformationByAddress->getCity(),'StateAbbrev'=>$_CdyneDemographicsQTypeGetLocationInformationByAddress->getStateAbbrev(),'ZipCode'=>$_CdyneDemographicsQTypeGetLocationInformationByAddress->getZipCode(),'LicenseKey'=>$_CdyneDemographicsQTypeGetLocationInformationByAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncomeHouseValueByAddress
	 * Meta informations :
	 * 	- documentation : This function will return only Income and House Value. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetIncomeHouseValueByAddress::getAddressLine1()
	 * @uses CdyneDemographicsQTypeGetIncomeHouseValueByAddress::getCity()
	 * @uses CdyneDemographicsQTypeGetIncomeHouseValueByAddress::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetIncomeHouseValueByAddress::getZipCode()
	 * @uses CdyneDemographicsQTypeGetIncomeHouseValueByAddress::getLicenseKey()
	 * @param CdyneDemographicsQTypeGetIncomeHouseValueByAddress GetIncomeHouseValueByAddress
	 * @return CdyneDemographicsQTypeGetIncomeHouseValueByAddressResponse
	 */
	public function GetIncomeHouseValueByAddress(CdyneDemographicsQTypeGetIncomeHouseValueByAddress $_CdyneDemographicsQTypeGetIncomeHouseValueByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncomeHouseValueByAddress(array('AddressLine1'=>$_CdyneDemographicsQTypeGetIncomeHouseValueByAddress->getAddressLine1(),'City'=>$_CdyneDemographicsQTypeGetIncomeHouseValueByAddress->getCity(),'StateAbbrev'=>$_CdyneDemographicsQTypeGetIncomeHouseValueByAddress->getStateAbbrev(),'ZipCode'=>$_CdyneDemographicsQTypeGetIncomeHouseValueByAddress->getZipCode(),'LicenseKey'=>$_CdyneDemographicsQTypeGetIncomeHouseValueByAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPlaceIDbyAddress
	 * Meta informations :
	 * 	- documentation : This function will return the Place ID that can be used with more of the advanced functions via StateAbbrev, Tract, and Block.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyAddress::getAddressLine1()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyAddress::getCity()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyAddress::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyAddress::getZipCode()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyAddress::getLicenseKey()
	 * @param CdyneDemographicsQTypeGetPlaceIDbyAddress GetPlaceIDbyAddress
	 * @return CdyneDemographicsQTypeGetPlaceIDbyAddressResponse
	 */
	public function GetPlaceIDbyAddress(CdyneDemographicsQTypeGetPlaceIDbyAddress $_CdyneDemographicsQTypeGetPlaceIDbyAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPlaceIDbyAddress(array('AddressLine1'=>$_CdyneDemographicsQTypeGetPlaceIDbyAddress->getAddressLine1(),'City'=>$_CdyneDemographicsQTypeGetPlaceIDbyAddress->getCity(),'StateAbbrev'=>$_CdyneDemographicsQTypeGetPlaceIDbyAddress->getStateAbbrev(),'ZipCode'=>$_CdyneDemographicsQTypeGetPlaceIDbyAddress->getZipCode(),'LicenseKey'=>$_CdyneDemographicsQTypeGetPlaceIDbyAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPlaceIDbyCensusTractAndBlock
	 * Meta informations :
	 * 	- documentation : This function will return the Place ID that can be used with more of the advanced functions via StateAbbrev, Tract, and Block.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock::getCensusTract()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock::getCensusBlock()
	 * @uses CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock::getLicenseKey()
	 * @param CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock GetPlaceIDbyCensusTractAndBlock
	 * @return CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlockResponse
	 */
	public function GetPlaceIDbyCensusTractAndBlock(CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock $_CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPlaceIDbyCensusTractAndBlock(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock->getStateAbbrev(),'CensusTract'=>$_CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock->getCensusTract(),'CensusBlock'=>$_CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock->getCensusBlock(),'LicenseKey'=>$_CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSummaryInformationByPlaceID
	 * Meta informations :
	 * 	- documentation : This function will return Summary Information about a location via StateAbbrev and PlaceID.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetSummaryInformationByPlaceID::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetSummaryInformationByPlaceID::getPlaceID()
	 * @param CdyneDemographicsQTypeGetSummaryInformationByPlaceID GetSummaryInformationByPlaceID
	 * @return CdyneDemographicsQTypeGetSummaryInformationByPlaceIDResponse
	 */
	public function GetSummaryInformationByPlaceID(CdyneDemographicsQTypeGetSummaryInformationByPlaceID $_CdyneDemographicsQTypeGetSummaryInformationByPlaceID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSummaryInformationByPlaceID(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetSummaryInformationByPlaceID->getStateAbbrev(),'PlaceID'=>$_CdyneDemographicsQTypeGetSummaryInformationByPlaceID->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodAgeInDataSet
	 * Meta informations :
	 * 	- documentation : This function will return the Age Populations in a DataSet. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet GetNeighborhoodAgeInDataSet
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeInDataSetResponse
	 */
	public function GetNeighborhoodAgeInDataSet(CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet $_CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodAgeInDataSet(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet->getStateAbbrev(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeInDataSet->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodAgeGenderMaleInDataSet
	 * Meta informations :
	 * 	- documentation : This function will return the Male Age Populations in a DataSet. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet GetNeighborhoodAgeGenderMaleInDataSet
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSetResponse
	 */
	public function GetNeighborhoodAgeGenderMaleInDataSet(CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet $_CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodAgeGenderMaleInDataSet(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet->getStateAbbrev(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSet->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodAgeGenderFemaleInDataSet
	 * Meta informations :
	 * 	- documentation : This function will return the Female Age Populations in a DataSet. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet GetNeighborhoodAgeGenderFemaleInDataSet
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSetResponse
	 */
	public function GetNeighborhoodAgeGenderFemaleInDataSet(CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet $_CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodAgeGenderFemaleInDataSet(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet->getStateAbbrev(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSet->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodRealtyValueInDataSet
	 * Meta informations :
	 * 	- documentation : This function will return the Realty Value Population in a DataSet. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet::getStateAbbrev()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet GetNeighborhoodRealtyValueInDataSet
	 * @return CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSetResponse
	 */
	public function GetNeighborhoodRealtyValueInDataSet(CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet $_CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodRealtyValueInDataSet(array('StateAbbrev'=>$_CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet->getStateAbbrev(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSet->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodVehiclesPerHouseholdInDataset
	 * Meta informations :
	 * 	- documentation : This function will return the number of cars for each household in the given neighborhood in a dataset. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset::getStateAbbr()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset GetNeighborhoodVehiclesPerHouseholdInDataset
	 * @return CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDatasetResponse
	 */
	public function GetNeighborhoodVehiclesPerHouseholdInDataset(CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset $_CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodVehiclesPerHouseholdInDataset(array('StateAbbr'=>$_CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset->getStateAbbr(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDataset->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset
	 * Meta informations :
	 * 	- documentation : This function will return the place of birth by their citizenship status in a dataset. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset::getStateAbbr()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset
	 * @return CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResponse
	 */
	public function GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset(CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset $_CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset(array('StateAbbr'=>$_CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset->getStateAbbr(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDataset->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodYearStructuresBuilt
	 * Meta informations :
	 * 	- documentation : This function will return the year the the houses build during a period in a dataset. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt::getStateAbbr()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt GetNeighborhoodYearStructuresBuilt
	 * @return CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuiltResponse
	 */
	public function GetNeighborhoodYearStructuresBuilt(CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt $_CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodYearStructuresBuilt(array('StateAbbr'=>$_CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt->getStateAbbr(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuilt->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNeighborhoodLinguisticIsolation
	 * Meta informations :
	 * 	- documentation : This function will return isolation of different cultures in a particular area in a dataset. Use a LicenseKey of 0 for testing.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation::getStateAbbr()
	 * @uses CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation::getPlaceID()
	 * @param CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation GetNeighborhoodLinguisticIsolation
	 * @return CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolationResponse
	 */
	public function GetNeighborhoodLinguisticIsolation(CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation $_CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNeighborhoodLinguisticIsolation(array('StateAbbr'=>$_CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation->getStateAbbr(),'PlaceID'=>$_CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolation->getPlaceID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVersion
	 * Meta informations :
	 * 	- documentation : Version Information.
	 * @uses CdyneDemographicsQWsdlClass::getSoapClient()
	 * @uses CdyneDemographicsQWsdlClass::setResult()
	 * @uses CdyneDemographicsQWsdlClass::getResult()
	 * @uses CdyneDemographicsQWsdlClass::saveLastError()
	 * @param CdyneDemographicsQTypeGetVersion GetVersion
	 * @return CdyneDemographicsQTypeGetVersionResponse
	 */
	public function GetVersion(CdyneDemographicsQTypeGetVersion $_CdyneDemographicsQTypeGetVersion)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVersion(array()));
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
	 * @return CdyneDemographicsQTypeGetVersionResponse
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