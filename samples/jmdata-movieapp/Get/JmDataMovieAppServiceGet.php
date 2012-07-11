<?php
/**
 * Class file for JmDataMovieAppServiceGet
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppServiceGet
 * @date 10/07/2012
 */
class JmDataMovieAppServiceGet extends JmDataMovieAppWsdlClass
{
	/**
	 * Method to call GetCustomerCard
	 * Meta informations :
	 * 	- documentation : Gets the users customer barcode/number
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetCustomerCard::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetCustomerCard::getUserID()
	 * @param JmDataMovieAppTypeGetCustomerCard GetCustomerCard
	 * @return JmDataMovieAppTypeGetCustomerCardResponse
	 */
	public function GetCustomerCard(JmDataMovieAppTypeGetCustomerCard $_JmDataMovieAppTypeGetCustomerCard)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCustomerCard(array('APIKEY'=>$_JmDataMovieAppTypeGetCustomerCard->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeGetCustomerCard->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFavoriteMovies
	 * Meta informations :
	 * 	- documentation : Get the list of the users favorite movies
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetFavoriteMovies::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetFavoriteMovies::getUserID()
	 * @param JmDataMovieAppTypeGetFavoriteMovies GetFavoriteMovies
	 * @return JmDataMovieAppTypeGetFavoriteMoviesResponse
	 */
	public function GetFavoriteMovies(JmDataMovieAppTypeGetFavoriteMovies $_JmDataMovieAppTypeGetFavoriteMovies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFavoriteMovies(array('APIKEY'=>$_JmDataMovieAppTypeGetFavoriteMovies->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeGetFavoriteMovies->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFavoriteStore
	 * Meta informations :
	 * 	- documentation : Get a list of the users favorite stores
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetFavoriteStore::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetFavoriteStore::getUserID()
	 * @param JmDataMovieAppTypeGetFavoriteStore GetFavoriteStore
	 * @return JmDataMovieAppTypeGetFavoriteStoreResponse
	 */
	public function GetFavoriteStore(JmDataMovieAppTypeGetFavoriteStore $_JmDataMovieAppTypeGetFavoriteStore)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFavoriteStore(array('APIKEY'=>$_JmDataMovieAppTypeGetFavoriteStore->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeGetFavoriteStore->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPromotedMovies
	 * Meta informations :
	 * 	- documentation : Get a list of movies to be displayed on top of the film page.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetPromotedMovies::getAPIKEY()
	 * @param JmDataMovieAppTypeGetPromotedMovies GetPromotedMovies
	 * @return JmDataMovieAppTypeGetPromotedMoviesResponse
	 */
	public function GetPromotedMovies(JmDataMovieAppTypeGetPromotedMovies $_JmDataMovieAppTypeGetPromotedMovies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPromotedMovies(array('APIKEY'=>$_JmDataMovieAppTypeGetPromotedMovies->getAPIKEY())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCoupons
	 * Meta informations :
	 * 	- documentation : Get a list of coupons for the specified user.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetCoupons::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetCoupons::getUserID()
	 * @param JmDataMovieAppTypeGetCoupons GetCoupons
	 * @return JmDataMovieAppTypeGetCouponsResponse
	 */
	public function GetCoupons(JmDataMovieAppTypeGetCoupons $_JmDataMovieAppTypeGetCoupons)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCoupons(array('APIKEY'=>$_JmDataMovieAppTypeGetCoupons->getAPIKEY(),'userID'=>$_JmDataMovieAppTypeGetCoupons->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFrontpageMovies
	 * Meta informations :
	 * 	- documentation : Get a list of covers to be displayed on the front page.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetFrontpageMovies::getAPIKEY()
	 * @param JmDataMovieAppTypeGetFrontpageMovies GetFrontpageMovies
	 * @return JmDataMovieAppTypeGetFrontpageMoviesResponse
	 */
	public function GetFrontpageMovies(JmDataMovieAppTypeGetFrontpageMovies $_JmDataMovieAppTypeGetFrontpageMovies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFrontpageMovies(array('APIKEY'=>$_JmDataMovieAppTypeGetFrontpageMovies->getAPIKEY())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStoresFromIDs
	 * Meta informations :
	 * 	- documentation : Get a list of stores baed on comma-separated store ID string.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetStoresFromIDs::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetStoresFromIDs::getIDs()
	 * @param JmDataMovieAppTypeGetStoresFromIDs GetStoresFromIDs
	 * @return JmDataMovieAppTypeGetStoresFromIDsResponse
	 */
	public function GetStoresFromIDs(JmDataMovieAppTypeGetStoresFromIDs $_JmDataMovieAppTypeGetStoresFromIDs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStoresFromIDs(array('APIKEY'=>$_JmDataMovieAppTypeGetStoresFromIDs->getAPIKEY(),'IDs'=>$_JmDataMovieAppTypeGetStoresFromIDs->getIDs())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNearByStores
	 * Meta informations :
	 * 	- documentation : Get a list of stores based on longitude and latitude.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetNearByStores::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetNearByStores::getLat()
	 * @uses JmDataMovieAppTypeGetNearByStores::getLon()
	 * @uses JmDataMovieAppTypeGetNearByStores::getStoreType()
	 * @param JmDataMovieAppTypeGetNearByStores GetNearByStores
	 * @return JmDataMovieAppTypeGetNearByStoresResponse
	 */
	public function GetNearByStores(JmDataMovieAppTypeGetNearByStores $_JmDataMovieAppTypeGetNearByStores)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNearByStores(array('APIKEY'=>$_JmDataMovieAppTypeGetNearByStores->getAPIKEY(),'lat'=>$_JmDataMovieAppTypeGetNearByStores->getLat(),'lon'=>$_JmDataMovieAppTypeGetNearByStores->getLon(),'storeType'=>$_JmDataMovieAppTypeGetNearByStores->getStoreType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategories
	 * Meta informations :
	 * 	- documentation : Get a list of categories to be used for GetMovieListingByGenre.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetCategories::getAPIKEY()
	 * @param JmDataMovieAppTypeGetCategories GetCategories
	 * @return JmDataMovieAppTypeGetCategoriesResponse
	 */
	public function GetCategories(JmDataMovieAppTypeGetCategories $_JmDataMovieAppTypeGetCategories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategories(array('APIKEY'=>$_JmDataMovieAppTypeGetCategories->getAPIKEY())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMoviesFromIDs
	 * Meta informations :
	 * 	- documentation : Get a list of movies from a comma-separed filmID string.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetMoviesFromIDs::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetMoviesFromIDs::getMovieIDs()
	 * @param JmDataMovieAppTypeGetMoviesFromIDs GetMoviesFromIDs
	 * @return JmDataMovieAppTypeGetMoviesFromIDsResponse
	 */
	public function GetMoviesFromIDs(JmDataMovieAppTypeGetMoviesFromIDs $_JmDataMovieAppTypeGetMoviesFromIDs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMoviesFromIDs(array('APIKEY'=>$_JmDataMovieAppTypeGetMoviesFromIDs->getAPIKEY(),'movieIDs'=>$_JmDataMovieAppTypeGetMoviesFromIDs->getMovieIDs())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMovieListingByGenre
	 * Meta informations :
	 * 	- documentation : Get a list of movies based on categories.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetMovieListingByGenre::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetMovieListingByGenre::getMovieType()
	 * @uses JmDataMovieAppTypeGetMovieListingByGenre::getCategory()
	 * @uses JmDataMovieAppTypeGetMovieListingByGenre::getTopmovies()
	 * @param JmDataMovieAppTypeGetMovieListingByGenre GetMovieListingByGenre
	 * @return JmDataMovieAppTypeGetMovieListingByGenreResponse
	 */
	public function GetMovieListingByGenre(JmDataMovieAppTypeGetMovieListingByGenre $_JmDataMovieAppTypeGetMovieListingByGenre)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMovieListingByGenre(array('APIKEY'=>$_JmDataMovieAppTypeGetMovieListingByGenre->getAPIKEY(),'movieType'=>$_JmDataMovieAppTypeGetMovieListingByGenre->getMovieType(),'category'=>$_JmDataMovieAppTypeGetMovieListingByGenre->getCategory(),'topmovies'=>$_JmDataMovieAppTypeGetMovieListingByGenre->getTopmovies())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNewMovieListing
	 * Meta informations :
	 * 	- documentation : Get a list of new movies.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetNewMovieListing::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetNewMovieListing::getMovieType()
	 * @uses JmDataMovieAppTypeGetNewMovieListing::getTopmovies()
	 * @param JmDataMovieAppTypeGetNewMovieListing GetNewMovieListing
	 * @return JmDataMovieAppTypeGetNewMovieListingResponse
	 */
	public function GetNewMovieListing(JmDataMovieAppTypeGetNewMovieListing $_JmDataMovieAppTypeGetNewMovieListing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewMovieListing(array('APIKEY'=>$_JmDataMovieAppTypeGetNewMovieListing->getAPIKEY(),'movieType'=>$_JmDataMovieAppTypeGetNewMovieListing->getMovieType(),'topmovies'=>$_JmDataMovieAppTypeGetNewMovieListing->getTopmovies())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReleasePlan
	 * Meta informations :
	 * 	- documentation : Get the release plan.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetReleasePlan::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetReleasePlan::getMovieType()
	 * @uses JmDataMovieAppTypeGetReleasePlan::getTopmovies()
	 * @param JmDataMovieAppTypeGetReleasePlan GetReleasePlan
	 * @return JmDataMovieAppTypeGetReleasePlanResponse
	 */
	public function GetReleasePlan(JmDataMovieAppTypeGetReleasePlan $_JmDataMovieAppTypeGetReleasePlan)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReleasePlan(array('APIKEY'=>$_JmDataMovieAppTypeGetReleasePlan->getAPIKEY(),'movieType'=>$_JmDataMovieAppTypeGetReleasePlan->getMovieType(),'topmovies'=>$_JmDataMovieAppTypeGetReleasePlan->getTopmovies())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopMovieListing
	 * Meta informations :
	 * 	- documentation : Get the currnet top list.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetTopMovieListing::getAPIKEY()
	 * @param JmDataMovieAppTypeGetTopMovieListing GetTopMovieListing
	 * @return JmDataMovieAppTypeGetTopMovieListingResponse
	 */
	public function GetTopMovieListing(JmDataMovieAppTypeGetTopMovieListing $_JmDataMovieAppTypeGetTopMovieListing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMovieListing(array('APIKEY'=>$_JmDataMovieAppTypeGetTopMovieListing->getAPIKEY())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMovieDetails
	 * Meta informations :
	 * 	- documentation : Get movie details from movieID.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetMovieDetails::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetMovieDetails::getMovieID()
	 * @param JmDataMovieAppTypeGetMovieDetails GetMovieDetails
	 * @return JmDataMovieAppTypeGetMovieDetailsResponse
	 */
	public function GetMovieDetails(JmDataMovieAppTypeGetMovieDetails $_JmDataMovieAppTypeGetMovieDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMovieDetails(array('APIKEY'=>$_JmDataMovieAppTypeGetMovieDetails->getAPIKEY(),'movieID'=>$_JmDataMovieAppTypeGetMovieDetails->getMovieID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMovieDetailsFromEAN
	 * Meta informations :
	 * 	- documentation : Get movie details from EAN.
	 * @uses JmDataMovieAppWsdlClass::getSoapClient()
	 * @uses JmDataMovieAppWsdlClass::setResult()
	 * @uses JmDataMovieAppWsdlClass::getResult()
	 * @uses JmDataMovieAppWsdlClass::saveLastError()
	 * @uses JmDataMovieAppTypeGetMovieDetailsFromEAN::getAPIKEY()
	 * @uses JmDataMovieAppTypeGetMovieDetailsFromEAN::getEan()
	 * @param JmDataMovieAppTypeGetMovieDetailsFromEAN GetMovieDetailsFromEAN
	 * @return JmDataMovieAppTypeGetMovieDetailsFromEANResponse
	 */
	public function GetMovieDetailsFromEAN(JmDataMovieAppTypeGetMovieDetailsFromEAN $_JmDataMovieAppTypeGetMovieDetailsFromEAN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMovieDetailsFromEAN(array('APIKEY'=>$_JmDataMovieAppTypeGetMovieDetailsFromEAN->getAPIKEY(),'ean'=>$_JmDataMovieAppTypeGetMovieDetailsFromEAN->getEan())));
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
	 * @return JmDataMovieAppTypeGetMovieDetailsFromEANResponse
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