<?php
/**
 * Class file for ConeSearchServiceRevisions
 * @date 13/10/2012
 */
/**
 * Class ConeSearchServiceRevisions
 * @date 13/10/2012
 */
class ConeSearchServiceRevisions extends ConeSearchWsdlClass
{
	/**
	 * Method to call Revisions
	 * Meta informations :
	 * 	- documentation : Return CVS revision numbers
	 * @uses ConeSearchWsdlClass::getSoapClient()
	 * @uses ConeSearchWsdlClass::setResult()
	 * @uses ConeSearchWsdlClass::getResult()
	 * @uses ConeSearchWsdlClass::saveLastError()
	 * @param ConeSearchTypeRevisions Revisions
	 * @return ConeSearchTypeRevisionsResponse
	 */
	public function Revisions(ConeSearchTypeRevisions $_ConeSearchTypeRevisions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Revisions(array()));
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
	 * @return ConeSearchTypeRevisionsResponse
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