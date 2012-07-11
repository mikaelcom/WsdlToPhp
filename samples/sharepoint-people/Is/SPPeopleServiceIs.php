<?php
/**
 * Class file for SPPeopleServiceIs
 * @date 06/07/2012
 */
/**
 * Class SPPeopleServiceIs
 * @date 06/07/2012
 */
class SPPeopleServiceIs extends SPPeopleWsdlClass
{
	/**
	 * Method to call IsClaimsMode
	 * @uses SPPeopleWsdlClass::getSoapClient()
	 * @uses SPPeopleWsdlClass::setResult()
	 * @uses SPPeopleWsdlClass::getResult()
	 * @uses SPPeopleWsdlClass::saveLastError()
	 * @param SPPeopleTypeIsClaimsMode IsClaimsMode
	 * @return SPPeopleTypeIsClaimsModeResponse
	 */
	public function IsClaimsMode(SPPeopleTypeIsClaimsMode $_SPPeopleTypeIsClaimsMode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsClaimsMode(array()));
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
	 * @return SPPeopleTypeIsClaimsModeResponse
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