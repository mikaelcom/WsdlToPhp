<?php
/**
 * Class file for UsgsUsngServiceGet_
 * @date 08/07/2012
 */
/**
 * Class UsgsUsngServiceGet_
 * @date 08/07/2012
 */
class UsgsUsngServiceGet_ extends UsgsUsngWsdlClass
{
	/**
	 * Method to call Get_USNG
	 * Meta informations :
	 * 	- documentation : Returns a United States National Grid Coordinate for a given latitude/longitude point specified in decimal degrees.
	 * @uses UsgsUsngWsdlClass::getSoapClient()
	 * @uses UsgsUsngWsdlClass::setResult()
	 * @uses UsgsUsngWsdlClass::getResult()
	 * @uses UsgsUsngWsdlClass::saveLastError()
	 * @uses UsgsUsngTypeGet_USNG::getX_Value()
	 * @uses UsgsUsngTypeGet_USNG::getY_Value()
	 * @param UsgsUsngTypeGet_USNG Get_USNG
	 * @return UsgsUsngTypeGet_USNGResponse
	 */
	public function Get_USNG(UsgsUsngTypeGet_USNG $_UsgsUsngTypeGet_USNG)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get_USNG(array('X_Value'=>$_UsgsUsngTypeGet_USNG->getX_Value(),'Y_Value'=>$_UsgsUsngTypeGet_USNG->getY_Value())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Get_XY
	 * Meta informations :
	 * 	- documentation : Returns a latitude/longitude point specified in decimal degrees for a given United States National Grid Coordinate.
	 * @uses UsgsUsngWsdlClass::getSoapClient()
	 * @uses UsgsUsngWsdlClass::setResult()
	 * @uses UsgsUsngWsdlClass::getResult()
	 * @uses UsgsUsngWsdlClass::saveLastError()
	 * @uses UsgsUsngTypeGet_XY::getUSNG_Value()
	 * @param UsgsUsngTypeGet_XY Get_XY
	 * @return UsgsUsngTypeGet_XYResponse
	 */
	public function Get_XY(UsgsUsngTypeGet_XY $_UsgsUsngTypeGet_XY)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Get_XY(array('USNG_Value'=>$_UsgsUsngTypeGet_XY->getUSNG_Value())));
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
	 * @return UsgsUsngTypeGet_XYResponse
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