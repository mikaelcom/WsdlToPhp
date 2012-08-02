<?php
/**
 * Class file for LifePicsServiceUpdate
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceUpdate
 * @date 02/08/2012
 */
class LifePicsServiceUpdate extends LifePicsWsdlClass
{
	/**
	 * Method to call UpdateItemInCart
	 * Meta informations :
	 * 	- documentation : Used for updating the quantity of a specific item in the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeUpdateItemInCart::getSessionID()
	 * @uses LifePicsTypeUpdateItemInCart::getCartItemID()
	 * @uses LifePicsTypeUpdateItemInCart::getQuantity()
	 * @param LifePicsTypeUpdateItemInCart UpdateItemInCart
	 * @return LifePicsTypeUpdateItemInCartResponse
	 */
	public function UpdateItemInCart(LifePicsTypeUpdateItemInCart $_LifePicsTypeUpdateItemInCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateItemInCart(array('SessionID'=>$_LifePicsTypeUpdateItemInCart->getSessionID(),'CartItemID'=>$_LifePicsTypeUpdateItemInCart->getCartItemID(),'Quantity'=>$_LifePicsTypeUpdateItemInCart->getQuantity())));
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
	 * @return LifePicsTypeUpdateItemInCartResponse
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