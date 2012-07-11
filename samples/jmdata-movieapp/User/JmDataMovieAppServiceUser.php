<?php
/**
 * Class file for JmDataMovieAppServiceUser
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceUser
 * @date 10/07/2012
 */
class JmDataMovieAppServiceUser extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call UserLatLong
	 * Meta informations :
	 * 	- documentation : Register a the users current coordinates
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeUserLatLong::getAPIKEY()
	 * @uses JmDataMovieAppTypeUserLatLong::getUserID()
	 * @uses JmDataMovieAppTypeUserLatLong::getLatitude()
	 * @uses JmDataMovieAppTypeUserLatLong::getLongitude()
	 * @param JmDataMovieAppTypeUserLatLong UserLatLong
	 * @return JmDataMovieAppTypeUserLatLongResponse
	 */
	public function UserLatLong(JmDataMovieAppTypeUserLatLong $_JmDataMovieAppTypeUserLatLong)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UserLatLong(array('APIKEY'=>$_JmDataMovieAppTypeUserLatLong->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeUserLatLong->getUserID(),'latitude'=>$_JmDataMovieAppTypeUserLatLong->getLatitude(),'longitude'=>$_JmDataMovieAppTypeUserLatLong->getLongitude())));
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
	 * @return JmDataMovieAppTypeUserLatLongResponse
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