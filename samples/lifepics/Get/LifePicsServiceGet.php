<?php
/**
 * Class file for LifePicsServiceGet
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceGet
 * @date 02/08/2012
 */
class LifePicsServiceGet extends LifePicsWsdlClass
{
	/**
	 * Method to call GetStores
	 * Meta informations :
	 * 	- documentation : Used to return a list of available stores with paging for a merchant group using metric distances
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetStoresByPostalCode::getSessionID()
	 * @uses LifePicsTypeGetStoresByPostalCode::getPostalCode()
	 * @uses LifePicsTypeGetStoresByPostalCode::getPickupOnly()
	 * @param LifePicsTypeGetStoresByPostalCode GetStoresByPostalCode
	 * @return LifePicsTypeGetStoresByPostalCodeResponse
	 */
	public function GetStores(LifePicsTypeGetStoresByPostalCode $_LifePicsTypeGetStoresByPostalCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStores(array('SessionID'=>$_LifePicsTypeGetStoresByPostalCode->getSessionID(),'PostalCode'=>$_LifePicsTypeGetStoresByPostalCode->getPostalCode(),'PickupOnly'=>$_LifePicsTypeGetStoresByPostalCode->getPickupOnly())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserID
	 * Meta informations :
	 * 	- documentation : Used to return a user ID for a specific Partner Source
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetUserID::getSessionID()
	 * @uses LifePicsTypeGetUserID::getEmailAddress()
	 * @uses LifePicsTypeGetUserID::getPassword()
	 * @param LifePicsTypeGetUserID GetUserID
	 * @return LifePicsTypeGetUserIDResponse
	 */
	public function GetUserID(LifePicsTypeGetUserID $_LifePicsTypeGetUserID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserID(array('SessionID'=>$_LifePicsTypeGetUserID->getSessionID(),'EmailAddress'=>$_LifePicsTypeGetUserID->getEmailAddress(),'Password'=>$_LifePicsTypeGetUserID->getPassword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAlbums
	 * Meta informations :
	 * 	- documentation : Used to return a user's albums with a max album image size
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetAlbums::getSessionID()
	 * @uses LifePicsTypeGetAlbums::getUserID()
	 * @param LifePicsTypeGetAlbums GetAlbums
	 * @return LifePicsTypeGetAlbumsResponse
	 */
	public function GetAlbums(LifePicsTypeGetAlbums $_LifePicsTypeGetAlbums)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAlbums(array('SessionID'=>$_LifePicsTypeGetAlbums->getSessionID(),'UserID'=>$_LifePicsTypeGetAlbums->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetImages
	 * Meta informations :
	 * 	- documentation : Used to return a user's images in an album with a max image size
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetImages::getSessionID()
	 * @uses LifePicsTypeGetImages::getUserID()
	 * @uses LifePicsTypeGetImages::getAlbumID()
	 * @param LifePicsTypeGetImages GetImages
	 * @return LifePicsTypeGetImagesResponse
	 */
	public function GetImages(LifePicsTypeGetImages $_LifePicsTypeGetImages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetImages(array('SessionID'=>$_LifePicsTypeGetImages->getSessionID(),'UserID'=>$_LifePicsTypeGetImages->getUserID(),'AlbumID'=>$_LifePicsTypeGetImages->getAlbumID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProducts
	 * Meta informations :
	 * 	- documentation : Used for retrieving a list of pickup products for a specific merchant
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetProductsAll::getSessionID()
	 * @uses LifePicsTypeGetProductsAll::getMerchantID()
	 * @uses LifePicsTypeGetProductsAll::getProductCategoryID()
	 * @param LifePicsTypeGetProductsAll GetProductsAll
	 * @return LifePicsTypeGetProductsAllResponse
	 */
	public function GetProducts(LifePicsTypeGetProductsAll $_LifePicsTypeGetProductsAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProducts(array('SessionID'=>$_LifePicsTypeGetProductsAll->getSessionID(),'MerchantID'=>$_LifePicsTypeGetProductsAll->getMerchantID(),'ProductCategoryID'=>$_LifePicsTypeGetProductsAll->getProductCategoryID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCart
	 * Meta informations :
	 * 	- documentation : Used for returning all products in the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeGetCart::getSessionID()
	 * @uses LifePicsTypeGetCart::getMerchantID()
	 * @uses LifePicsTypeGetCart::getUserID()
	 * @param LifePicsTypeGetCart GetCart
	 * @return LifePicsTypeGetCartResponse
	 */
	public function GetCart(LifePicsTypeGetCart $_LifePicsTypeGetCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCart(array('SessionID'=>$_LifePicsTypeGetCart->getSessionID(),'MerchantID'=>$_LifePicsTypeGetCart->getMerchantID(),'UserID'=>$_LifePicsTypeGetCart->getUserID())));
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
	 * @return LifePicsTypeGetStoresByPostalCodeResponse|LifePicsTypeGetUserIDResponse|LifePicsTypeGetAlbumsResponse|LifePicsTypeGetImagesResponse|LifePicsTypeGetProductsAllResponse|LifePicsTypeGetCartResponse
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