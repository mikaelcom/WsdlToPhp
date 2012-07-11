<?php
/**
 * Class file for UsgsElevationServiceGet
 * @date 08/07/2012
 */
/**
 * Class UsgsElevationServiceGet
 * @date 08/07/2012
 */
class UsgsElevationServiceGet extends UsgsElevationWsdlClass
{
	/**
	 * Method to call getElevation
	 * Meta informations :
	 * 	- documentation : Returns a value from a single elevation source for a given latitude/longitude point
	 * @uses UsgsElevationWsdlClass::getSoapClient()
	 * @uses UsgsElevationWsdlClass::setResult()
	 * @uses UsgsElevationWsdlClass::getResult()
	 * @uses UsgsElevationWsdlClass::saveLastError()
	 * @uses UsgsElevationTypeGetElevation::getX_Value()
	 * @uses UsgsElevationTypeGetElevation::getY_Value()
	 * @uses UsgsElevationTypeGetElevation::getElevation_Units()
	 * @uses UsgsElevationTypeGetElevation::getSource_Layer()
	 * @uses UsgsElevationTypeGetElevation::getElevation_Only()
	 * @param UsgsElevationTypeGetElevation GetElevation
	 * @return UsgsElevationTypeGetElevationResponse
	 */
	public function getElevation(UsgsElevationTypeGetElevation $_UsgsElevationTypeGetElevation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getElevation(array('X_Value'=>$_UsgsElevationTypeGetElevation->getX_Value(),'Y_Value'=>$_UsgsElevationTypeGetElevation->getY_Value(),'Elevation_Units'=>$_UsgsElevationTypeGetElevation->getElevation_Units(),'Source_Layer'=>$_UsgsElevationTypeGetElevation->getSource_Layer(),'Elevation_Only'=>$_UsgsElevationTypeGetElevation->getElevation_Only())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getAllElevations
	 * Meta informations :
	 * 	- documentation : Returns values from all elevation sources for a given latitude/longitude point
	 * @uses UsgsElevationWsdlClass::getSoapClient()
	 * @uses UsgsElevationWsdlClass::setResult()
	 * @uses UsgsElevationWsdlClass::getResult()
	 * @uses UsgsElevationWsdlClass::saveLastError()
	 * @uses UsgsElevationTypeGetAllElevations::getX_Value()
	 * @uses UsgsElevationTypeGetAllElevations::getY_Value()
	 * @uses UsgsElevationTypeGetAllElevations::getElevation_Units()
	 * @param UsgsElevationTypeGetAllElevations GetAllElevations
	 * @return UsgsElevationTypeGetAllElevationsResponse
	 */
	public function getAllElevations(UsgsElevationTypeGetAllElevations $_UsgsElevationTypeGetAllElevations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getAllElevations(array('X_Value'=>$_UsgsElevationTypeGetAllElevations->getX_Value(),'Y_Value'=>$_UsgsElevationTypeGetAllElevations->getY_Value(),'Elevation_Units'=>$_UsgsElevationTypeGetAllElevations->getElevation_Units())));
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
	 * @return UsgsElevationTypeGetAllElevationsResponse
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