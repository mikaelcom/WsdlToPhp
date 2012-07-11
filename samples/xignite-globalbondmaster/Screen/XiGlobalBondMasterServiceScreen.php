<?php
/**
 * Class file for XiGlobalBondMasterServiceScreen
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterServiceScreen
 * @date 08/07/2012
 */
class XiGlobalBondMasterServiceScreen extends XiGlobalBondMasterWsdlClass
{
	/**
	 * Method to call ScreenBonds
	 * Meta informations :
	 * 	- documentation : This service returns basic information about Bonds that match coupon rate and maturity date range provided in the input.
	 * @uses XiGlobalBondMasterWsdlClass::getSoapClient()
	 * @uses XiGlobalBondMasterWsdlClass::setResult()
	 * @uses XiGlobalBondMasterWsdlClass::getResult()
	 * @uses XiGlobalBondMasterWsdlClass::saveLastError()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getIssuer()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getDomicile()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getStartMaturityDate()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getEndMaturityDate()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getStartCouponRate()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getEndCouponRate()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getCallable()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getConvertible()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getIncludeNonactive()
	 * @uses XiGlobalBondMasterTypeScreenBonds::getMaxResultCount()
	 * @param XiGlobalBondMasterTypeScreenBonds ScreenBonds
	 * @return XiGlobalBondMasterTypeScreenBondsResponse
	 */
	public function ScreenBonds(XiGlobalBondMasterTypeScreenBonds $_XiGlobalBondMasterTypeScreenBonds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ScreenBonds(array('Issuer'=>$_XiGlobalBondMasterTypeScreenBonds->getIssuer(),'Domicile'=>$_XiGlobalBondMasterTypeScreenBonds->getDomicile(),'StartMaturityDate'=>$_XiGlobalBondMasterTypeScreenBonds->getStartMaturityDate(),'EndMaturityDate'=>$_XiGlobalBondMasterTypeScreenBonds->getEndMaturityDate(),'StartCouponRate'=>$_XiGlobalBondMasterTypeScreenBonds->getStartCouponRate(),'EndCouponRate'=>$_XiGlobalBondMasterTypeScreenBonds->getEndCouponRate(),'Callable'=>$_XiGlobalBondMasterTypeScreenBonds->getCallable(),'Convertible'=>$_XiGlobalBondMasterTypeScreenBonds->getConvertible(),'IncludeNonactive'=>$_XiGlobalBondMasterTypeScreenBonds->getIncludeNonactive(),'MaxResultCount'=>$_XiGlobalBondMasterTypeScreenBonds->getMaxResultCount())));
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
	 * @return XiGlobalBondMasterTypeScreenBondsResponse
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