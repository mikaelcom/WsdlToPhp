<?php
/**
 * Class file for SPSitesServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPSitesServiceDelete
 * @date 06/07/2012
 */
class SPSitesServiceDelete extends SPSitesWsdlClass
{
	/**
	 * Method to call DeleteWeb
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeDeleteWeb::getUrl()
	 * @param SPSitesTypeDeleteWeb DeleteWeb
	 * @return SPSitesTypeDeleteWebResponse
	 */
	public function DeleteWeb(SPSitesTypeDeleteWeb $_SPSitesTypeDeleteWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWeb(array('url'=>$_SPSitesTypeDeleteWeb->getUrl())));
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
	 * @return SPSitesTypeDeleteWebResponse
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