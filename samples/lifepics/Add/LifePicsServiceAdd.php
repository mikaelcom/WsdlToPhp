<?php
/**
 * Class file for LifePicsServiceAdd
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceAdd
 * @date 02/08/2012
 */
class LifePicsServiceAdd extends LifePicsWsdlClass
{
	/**
	 * Method to call AddImagesToCart
	 * Meta informations :
	 * 	- documentation : Used for adding images to a shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeAddImagesToCart::getSessionID()
	 * @uses LifePicsTypeAddImagesToCart::getMerchantID()
	 * @uses LifePicsTypeAddImagesToCart::getPartnerSourceID()
	 * @uses LifePicsTypeAddImagesToCart::getUserID()
	 * @uses LifePicsTypeAddImagesToCart::getImagesXML()
	 * @param LifePicsTypeAddImagesToCart AddImagesToCart
	 * @return LifePicsTypeAddImagesToCartResponse
	 */
	public function AddImagesToCart(LifePicsTypeAddImagesToCart $_LifePicsTypeAddImagesToCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddImagesToCart(array('SessionID'=>$_LifePicsTypeAddImagesToCart->getSessionID(),'MerchantID'=>$_LifePicsTypeAddImagesToCart->getMerchantID(),'PartnerSourceID'=>$_LifePicsTypeAddImagesToCart->getPartnerSourceID(),'UserID'=>$_LifePicsTypeAddImagesToCart->getUserID(),'ImagesXML'=>$_LifePicsTypeAddImagesToCart->getImagesXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddItemToCartWeb
	 * Meta informations :
	 * 	- documentation : Used for adding a product to the user's shopping cart for checkout on the LifePics website
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeAddItemToCartWeb::getSessionID()
	 * @uses LifePicsTypeAddItemToCartWeb::getMerchantID()
	 * @uses LifePicsTypeAddItemToCartWeb::getPartnerSourceID()
	 * @uses LifePicsTypeAddItemToCartWeb::getUserID()
	 * @uses LifePicsTypeAddItemToCartWeb::getPickupLocationID()
	 * @uses LifePicsTypeAddItemToCartWeb::getProductID()
	 * @uses LifePicsTypeAddItemToCartWeb::getQuantity()
	 * @uses LifePicsTypeAddItemToCartWeb::getImagesXML()
	 * @uses LifePicsTypeAddItemToCartWeb::getAttributesXML()
	 * @param LifePicsTypeAddItemToCartWeb AddItemToCartWeb
	 * @return LifePicsTypeAddItemToCartWebResponse
	 */
	public function AddItemToCartWeb(LifePicsTypeAddItemToCartWeb $_LifePicsTypeAddItemToCartWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddItemToCartWeb(array('SessionID'=>$_LifePicsTypeAddItemToCartWeb->getSessionID(),'MerchantID'=>$_LifePicsTypeAddItemToCartWeb->getMerchantID(),'PartnerSourceID'=>$_LifePicsTypeAddItemToCartWeb->getPartnerSourceID(),'UserID'=>$_LifePicsTypeAddItemToCartWeb->getUserID(),'PickupLocationID'=>$_LifePicsTypeAddItemToCartWeb->getPickupLocationID(),'ProductID'=>$_LifePicsTypeAddItemToCartWeb->getProductID(),'Quantity'=>$_LifePicsTypeAddItemToCartWeb->getQuantity(),'ImagesXML'=>$_LifePicsTypeAddItemToCartWeb->getImagesXML(),'AttributesXML'=>$_LifePicsTypeAddItemToCartWeb->getAttributesXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddItemToCart
	 * Meta informations :
	 * 	- documentation : Used for adding a product to the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeAddItemToCart::getSessionID()
	 * @uses LifePicsTypeAddItemToCart::getMerchantID()
	 * @uses LifePicsTypeAddItemToCart::getUserID()
	 * @uses LifePicsTypeAddItemToCart::getPickupLocationID()
	 * @uses LifePicsTypeAddItemToCart::getProductID()
	 * @uses LifePicsTypeAddItemToCart::getQuantity()
	 * @uses LifePicsTypeAddItemToCart::getImagesXML()
	 * @uses LifePicsTypeAddItemToCart::getAttributesXML()
	 * @param LifePicsTypeAddItemToCart AddItemToCart
	 * @return LifePicsTypeAddItemToCartResponse
	 */
	public function AddItemToCart(LifePicsTypeAddItemToCart $_LifePicsTypeAddItemToCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddItemToCart(array('SessionID'=>$_LifePicsTypeAddItemToCart->getSessionID(),'MerchantID'=>$_LifePicsTypeAddItemToCart->getMerchantID(),'UserID'=>$_LifePicsTypeAddItemToCart->getUserID(),'PickupLocationID'=>$_LifePicsTypeAddItemToCart->getPickupLocationID(),'ProductID'=>$_LifePicsTypeAddItemToCart->getProductID(),'Quantity'=>$_LifePicsTypeAddItemToCart->getQuantity(),'ImagesXML'=>$_LifePicsTypeAddItemToCart->getImagesXML(),'AttributesXML'=>$_LifePicsTypeAddItemToCart->getAttributesXML())));
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
	 * @return LifePicsTypeAddImagesToCartResponse|LifePicsTypeAddItemToCartWebResponse|LifePicsTypeAddItemToCartResponse
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