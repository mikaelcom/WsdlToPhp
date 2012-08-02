<?php
/**
 * Class file for LifePicsServiceEmpty
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceEmpty
 * @date 02/08/2012
 */
class LifePicsServiceEmpty extends LifePicsWsdlClass
{
	/**
	 * Method to call EmptyCart
	 * Meta informations :
	 * 	- documentation : Used for emptying the user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeEmptyCart::getSessionID()
	 * @uses LifePicsTypeEmptyCart::getCartID()
	 * @param LifePicsTypeEmptyCart EmptyCart
	 * @return LifePicsTypeEmptyCartResponse
	 */
	public function EmptyCart(LifePicsTypeEmptyCart $_LifePicsTypeEmptyCart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EmptyCart(array('SessionID'=>$_LifePicsTypeEmptyCart->getSessionID(),'CartID'=>$_LifePicsTypeEmptyCart->getCartID())));
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
	 * @return LifePicsTypeEmptyCartResponse
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