<?php
/**
 * Class file for XiEdgarServiceLookup
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceLookup
 * @date 08/07/2012
 */
class XiEdgarServiceLookup extends XiEdgarWsdlClass
{
	/**
	 * Method to call LookupCIK
	 * Meta informations :
	 * 	- documentation : Lookup a firm's CIK code.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeLookupCIK::getName()
	 * @param XiEdgarTypeLookupCIK LookupCIK
	 * @return XiEdgarTypeLookupCIKResponse
	 */
	public function LookupCIK(XiEdgarTypeLookupCIK $_XiEdgarTypeLookupCIK)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LookupCIK(array('Name'=>$_XiEdgarTypeLookupCIK->getName())));
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
	 * @return XiEdgarTypeLookupCIKResponse
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