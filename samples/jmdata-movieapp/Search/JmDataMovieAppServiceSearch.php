<?php
/**
 * Class file for JmDataMovieAppServiceSearch
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceSearch
 * @date 10/07/2012
 */
class JmDataMovieAppServiceSearch extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call SearchMovie
	 * Meta informations :
	 * 	- documentation : Movie search. Returns max 100 movies.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeSearchMovie::getAPIKEY()
	 * @uses JmDataMovieAppTypeSearchMovie::getMovieType()
	 * @uses JmDataMovieAppTypeSearchMovie::getSearchBy()
	 * @uses JmDataMovieAppTypeSearchMovie::getTopmovies()
	 * @param JmDataMovieAppTypeSearchMovie SearchMovie
	 * @return JmDataMovieAppTypeSearchMovieResponse
	 */
	public function SearchMovie(JmDataMovieAppTypeSearchMovie $_JmDataMovieAppTypeSearchMovie)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchMovie(array('APIKEY'=>$_JmDataMovieAppTypeSearchMovie->getAPIKEY(),'movieType'=>$_JmDataMovieAppTypeSearchMovie->getMovieType(),'searchBy'=>$_JmDataMovieAppTypeSearchMovie->getSearchBy(),'topmovies'=>$_JmDataMovieAppTypeSearchMovie->getTopmovies())));
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
	 * @return JmDataMovieAppTypeSearchMovieResponse
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