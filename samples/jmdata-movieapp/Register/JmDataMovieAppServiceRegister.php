<?php
/**
 * Class file for JmDataMovieAppServiceRegister
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceRegister
 * @date 10/07/2012
 */
class JmDataMovieAppServiceRegister extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call RegisterFavoriteMovie
	 * Meta informations :
	 * 	- documentation : Register a favorite movie from the detailed movie page
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRegisterFavoriteMovie::getAPIKEY()
	 * @uses JmDataMovieAppTypeRegisterFavoriteMovie::getUserID()
	 * @uses JmDataMovieAppTypeRegisterFavoriteMovie::getMovieID()
	 * @param JmDataMovieAppTypeRegisterFavoriteMovie RegisterFavoriteMovie
	 * @return JmDataMovieAppTypeRegisterFavoriteMovieResponse
	 */
	public function RegisterFavoriteMovie(JmDataMovieAppTypeRegisterFavoriteMovie $_JmDataMovieAppTypeRegisterFavoriteMovie)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterFavoriteMovie(array('APIKEY'=>$_JmDataMovieAppTypeRegisterFavoriteMovie->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeRegisterFavoriteMovie->getUserID(),'movieID'=>$_JmDataMovieAppTypeRegisterFavoriteMovie->getMovieID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RegisterFavoriteStore
	 * Meta informations :
	 * 	- documentation : Register a favorite store from the detailed store page
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRegisterFavoriteStore::getAPIKEY()
	 * @uses JmDataMovieAppTypeRegisterFavoriteStore::getUserID()
	 * @uses JmDataMovieAppTypeRegisterFavoriteStore::getStoreID()
	 * @param JmDataMovieAppTypeRegisterFavoriteStore RegisterFavoriteStore
	 * @return JmDataMovieAppTypeRegisterFavoriteStoreResponse
	 */
	public function RegisterFavoriteStore(JmDataMovieAppTypeRegisterFavoriteStore $_JmDataMovieAppTypeRegisterFavoriteStore)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterFavoriteStore(array('APIKEY'=>$_JmDataMovieAppTypeRegisterFavoriteStore->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeRegisterFavoriteStore->getUserID(),'storeID'=>$_JmDataMovieAppTypeRegisterFavoriteStore->getStoreID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RegisterUser
	 * Meta informations :
	 * 	- documentation : Register a new user. Run once (on first start-up) to get a UserID.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeRegisterUser::getAPIKEY()
	 * @uses JmDataMovieAppTypeRegisterUser::getUUID()
	 * @param JmDataMovieAppTypeRegisterUser RegisterUser
	 * @return JmDataMovieAppTypeRegisterUserResponse
	 */
	public function RegisterUser(JmDataMovieAppTypeRegisterUser $_JmDataMovieAppTypeRegisterUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RegisterUser(array('APIKEY'=>$_JmDataMovieAppTypeRegisterUser->getAPIKEY(),'UUID'=>$_JmDataMovieAppTypeRegisterUser->getUUID())));
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
	 * @return JmDataMovieAppTypeRegisterUserResponse
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