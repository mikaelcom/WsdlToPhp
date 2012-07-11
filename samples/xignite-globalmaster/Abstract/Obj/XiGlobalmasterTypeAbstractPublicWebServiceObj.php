<?php
/**
 * Class file for XiGlobalmasterTypeAbstractPublicWebServiceObj
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeAbstractPublicWebServiceObj
 * @date 08/07/2012
 */
class XiGlobalmasterTypeAbstractPublicWebServiceObj extends XiGlobalmasterTypeCommon
{
	/**
	 * The DataProvider
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeDataProviders
	 */
	public $DataProvider;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeDataProviders DataProvider
	 * @return XiGlobalmasterTypeAbstractPublicWebServiceObj
	 */
	public function __construct($_DataProvider)
	{
		XiGlobalmasterWsdlClass::__construct(array('DataProvider'=>$_DataProvider));
	}
	/**
	 * Set DataProvider
	 * @param DataProviders DataProvider
	 * @return DataProviders
	 */
	public function setDataProvider($_DataProvider)
	{
		return ($this->DataProvider = XiGlobalmasterTypeDataProviders::valueIsValid($_DataProvider)?$_DataProvider:null);
	}
	/**
	 * Get DataProvider
	 * @return XiGlobalmasterTypeDataProviders
	 */
	public function getDataProvider()
	{
		return $this->DataProvider;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>