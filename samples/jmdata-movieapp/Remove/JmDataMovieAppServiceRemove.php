<?php
/**
 * Class file for JmDataMovieAppServiceRemove
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceRemove
 * @date 10/07/2012
 */
class JmDataMovieAppServiceRemove extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call RemoveFavoriteMovie
	 * Meta informations :
	 * 	- documentation : Remove a favorite movie for this user
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRemoveFavoriteMovie::getAPIKEY()
	 * @uses JmDataMovieAppTypeRemoveFavoriteMovie::getUserID()
	 * @uses JmDataMovieAppTypeRemoveFavoriteMovie::getMovieID()
	 * @param JmDataMovieAppTypeRemoveFavoriteMovie RemoveFavoriteMovie
	 * @return JmDataMovieAppTypeRemoveFavoriteMovieResponse
	 */
	public function RemoveFavoriteMovie(JmDataMovieAppTypeRemoveFavoriteMovie $_JmDataMovieAppTypeRemoveFavoriteMovie)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveFavoriteMovie(array('APIKEY'=>$_JmDataMovieAppTypeRemoveFavoriteMovie->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeRemoveFavoriteMovie->getUserID(),'movieID'=>$_JmDataMovieAppTypeRemoveFavoriteMovie->getMovieID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RemoveFavoriteStore
	 * Meta informations :
	 * 	- documentation : Remove a favorite store for this user
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRemoveFavoriteStore::getAPIKEY()
	 * @uses JmDataMovieAppTypeRemoveFavoriteStore::getUserID()
	 * @uses JmDataMovieAppTypeRemoveFavoriteStore::getStoreID()
	 * @param JmDataMovieAppTypeRemoveFavoriteStore RemoveFavoriteStore
	 * @return JmDataMovieAppTypeRemoveFavoriteStoreResponse
	 */
	public function RemoveFavoriteStore(JmDataMovieAppTypeRemoveFavoriteStore $_JmDataMovieAppTypeRemoveFavoriteStore)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveFavoriteStore(array('APIKEY'=>$_JmDataMovieAppTypeRemoveFavoriteStore->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeRemoveFavoriteStore->getUserID(),'storeID'=>$_JmDataMovieAppTypeRemoveFavoriteStore->getStoreID())));
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
	 * @return JmDataMovieAppTypeRemoveFavoriteStoreResponse
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