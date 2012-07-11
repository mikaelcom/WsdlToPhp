<?php
/**
 * Class file for JmDataMovieAppServiceReserve
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceReserve
 * @date 10/07/2012
 */
class JmDataMovieAppServiceReserve extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call ReserveMovie
	 * Meta informations :
	 * 	- documentation : Reserve a movie. The reservation is further transfered to the store from the server.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeReserveMovie::getAPIKEY()
	 * @uses JmDataMovieAppTypeReserveMovie::getMovieID()
	 * @uses JmDataMovieAppTypeReserveMovie::getStoreID()
	 * @uses JmDataMovieAppTypeReserveMovie::getUserID()
	 * @param JmDataMovieAppTypeReserveMovie ReserveMovie
	 * @return JmDataMovieAppTypeReserveMovieResponse
	 */
	public function ReserveMovie(JmDataMovieAppTypeReserveMovie $_JmDataMovieAppTypeReserveMovie)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReserveMovie(array('APIKEY'=>$_JmDataMovieAppTypeReserveMovie->getAPIKEY(),'movieID'=>$_JmDataMovieAppTypeReserveMovie->getMovieID(),'storeID'=>$_JmDataMovieAppTypeReserveMovie->getStoreID(),'userID'=>$_JmDataMovieAppTypeReserveMovie->getUserID())));
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
	 * @return JmDataMovieAppTypeReserveMovieResponse
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