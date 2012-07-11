<?php
/**
 * Class file for JmDataMovieAppServiceRate
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceRate
 * @date 10/07/2012
 */
class JmDataMovieAppServiceRate extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call RateMovie
	 * Meta informations :
	 * 	- documentation : Register a film rating.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRateMovie::getAPIKEY()
	 * @uses JmDataMovieAppTypeRateMovie::getMovieID()
	 * @uses JmDataMovieAppTypeRateMovie::getRating()
	 * @uses JmDataMovieAppTypeRateMovie::getUserID()
	 * @param JmDataMovieAppTypeRateMovie RateMovie
	 * @return JmDataMovieAppTypeRateMovieResponse
	 */
	public function RateMovie(JmDataMovieAppTypeRateMovie $_JmDataMovieAppTypeRateMovie)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RateMovie(array('APIKEY'=>$_JmDataMovieAppTypeRateMovie->getAPIKEY(),'movieID'=>$_JmDataMovieAppTypeRateMovie->getMovieID(),'rating'=>$_JmDataMovieAppTypeRateMovie->getRating(),'userID'=>$_JmDataMovieAppTypeRateMovie->getUserID())));
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
	 * @return JmDataMovieAppTypeRateMovieResponse
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