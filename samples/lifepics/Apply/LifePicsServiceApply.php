<?php
/**
 * Class file for LifePicsServiceApply
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceApply
 * @date 02/08/2012
 */
class LifePicsServiceApply extends LifePicsWsdlClass
{
	/**
	 * Method to call ApplyDiscount
	 * Meta informations :
	 * 	- documentation : Used for applying a promotion to a user's shopping cart
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeApplyDiscount::getSessionID()
	 * @uses LifePicsTypeApplyDiscount::getCartID()
	 * @uses LifePicsTypeApplyDiscount::getPromotionCode()
	 * @uses LifePicsTypeApplyDiscount::getPreferredCustomerNumber()
	 * @param LifePicsTypeApplyDiscount ApplyDiscount
	 * @return LifePicsTypeApplyDiscountResponse
	 */
	public function ApplyDiscount(LifePicsTypeApplyDiscount $_LifePicsTypeApplyDiscount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ApplyDiscount(array('SessionID'=>$_LifePicsTypeApplyDiscount->getSessionID(),'CartID'=>$_LifePicsTypeApplyDiscount->getCartID(),'PromotionCode'=>$_LifePicsTypeApplyDiscount->getPromotionCode(),'PreferredCustomerNumber'=>$_LifePicsTypeApplyDiscount->getPreferredCustomerNumber())));
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
	 * @return LifePicsTypeApplyDiscountResponse
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