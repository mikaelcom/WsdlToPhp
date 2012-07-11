<?php
/**
 * Class file for EbayShoppingServiceGete
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingServiceGete
 * @date 05/07/2012
 */
class EbayShoppingServiceGete extends EbayShoppingWsdlClass
{
	/**
	 * Method to call GeteBayTime
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @param EbayShoppingTypeGeteBayTimeRequestType GeteBayTimeRequestType
	 * @return EbayShoppingTypeGeteBayTimeResponseType
	 */
	public function GeteBayTime(EbayShoppingTypeGeteBayTimeRequestType $_EbayShoppingTypeGeteBayTimeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GeteBayTime(array()));
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
	 * @return EbayShoppingTypeGeteBayTimeResponseType
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