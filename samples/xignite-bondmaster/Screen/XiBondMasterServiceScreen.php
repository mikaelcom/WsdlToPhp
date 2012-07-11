<?php
/**
 * Class file for XiBondMasterServiceScreen
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterServiceScreen
 * @date 08/07/2012
 */
class XiBondMasterServiceScreen extends XiBondMasterWsdlClass
{
	/**
	 * Method to call ScreenBonds
	 * Meta informations :
	 * 	- documentation : This service returns basic information about Bonds that match coupon rate and maturity date range provided in the input.
	 * @uses XiBondMasterWsdlClass::getSoapClient()
	 * @uses XiBondMasterWsdlClass::setResult()
	 * @uses XiBondMasterWsdlClass::getResult()
	 * @uses XiBondMasterWsdlClass::saveLastError()
	 * @uses XiBondMasterTypeScreenBonds::getIssuer()
	 * @uses XiBondMasterTypeScreenBonds::getStartMaturityDate()
	 * @uses XiBondMasterTypeScreenBonds::getEndMaturityDate()
	 * @uses XiBondMasterTypeScreenBonds::getStartCouponRate()
	 * @uses XiBondMasterTypeScreenBonds::getEndCouponRate()
	 * @uses XiBondMasterTypeScreenBonds::getCallable()
	 * @uses XiBondMasterTypeScreenBonds::getConvertible()
	 * @uses XiBondMasterTypeScreenBonds::getIncludeNonactive()
	 * @uses XiBondMasterTypeScreenBonds::getMaxResultCount()
	 * @param XiBondMasterTypeScreenBonds ScreenBonds
	 * @return XiBondMasterTypeScreenBondsResponse
	 */
	public function ScreenBonds(XiBondMasterTypeScreenBonds $_XiBondMasterTypeScreenBonds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ScreenBonds(array('Issuer'=>$_XiBondMasterTypeScreenBonds->getIssuer(),'StartMaturityDate'=>$_XiBondMasterTypeScreenBonds->getStartMaturityDate(),'EndMaturityDate'=>$_XiBondMasterTypeScreenBonds->getEndMaturityDate(),'StartCouponRate'=>$_XiBondMasterTypeScreenBonds->getStartCouponRate(),'EndCouponRate'=>$_XiBondMasterTypeScreenBonds->getEndCouponRate(),'Callable'=>$_XiBondMasterTypeScreenBonds->getCallable(),'Convertible'=>$_XiBondMasterTypeScreenBonds->getConvertible(),'IncludeNonactive'=>$_XiBondMasterTypeScreenBonds->getIncludeNonactive(),'MaxResultCount'=>$_XiBondMasterTypeScreenBonds->getMaxResultCount())));
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
	 * @return XiBondMasterTypeScreenBondsResponse
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