<?php
/**
 * Class file for JmDataMovieAppServiceCheck
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceCheck
 * @date 10/07/2012
 */
class JmDataMovieAppServiceCheck extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call CheckAvailability
	 * Meta informations :
	 * 	- documentation : Check if a film is available in a given store.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeCheckAvailability::getAPIKEY()
	 * @uses JmDataMovieAppTypeCheckAvailability::getMovieID()
	 * @uses JmDataMovieAppTypeCheckAvailability::getStoreID()
	 * @param JmDataMovieAppTypeCheckAvailability CheckAvailability
	 * @return JmDataMovieAppTypeCheckAvailabilityResponse
	 */
	public function CheckAvailability(JmDataMovieAppTypeCheckAvailability $_JmDataMovieAppTypeCheckAvailability)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckAvailability(array('APIKEY'=>$_JmDataMovieAppTypeCheckAvailability->getAPIKEY(),'movieID'=>$_JmDataMovieAppTypeCheckAvailability->getMovieID(),'storeID'=>$_JmDataMovieAppTypeCheckAvailability->getStoreID())));
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
	 * @return JmDataMovieAppTypeCheckAvailabilityResponse
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