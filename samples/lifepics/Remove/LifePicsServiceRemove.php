<?php
/**
 * Class file for LifePicsServiceRemove
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceRemove
 * @date 02/08/2012
 */
class LifePicsServiceRemove extends LifePicsWsdlClass
{
	/**
	 * Method to call RemoveItemFromCart
	 * Meta informations :
	 * 	- documentation : Used for removing a specific item from the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeRemoveItemFromCart::getSessionID()
	 * @uses LifePicsTypeRemoveItemFromCart::getCartItemID()
	 * @param LifePicsTypeRemoveItemFromCart RemoveItemFromCart
	 * @return LifePicsTypeRemoveItemFromCartResponse
	 */
	public function RemoveItemFromCart(LifePicsTypeRemoveItemFromCart $_LifePicsTypeRemoveItemFromCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveItemFromCart(array('SessionID'=>$_LifePicsTypeRemoveItemFromCart->getSessionID(),'CartItemID'=>$_LifePicsTypeRemoveItemFromCart->getCartItemID())));
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
	 * @return LifePicsTypeRemoveItemFromCartResponse
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