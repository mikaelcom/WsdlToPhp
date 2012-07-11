<?php
/**
 * Class file for XiGlobalmasterTypeLegacyExchangeMapping
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeLegacyExchangeMapping
 * @date 08/07/2012
 */
class XiGlobalmasterTypeLegacyExchangeMapping extends XiGlobalmasterTypeCommon
{
	/**
	 * The MIC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MIC;
	/**
	 * The LegacyValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $LegacyValues;
	/**
	 * Constructor
	 * @param string MIC
	 * @param string LegacyValues
	 * @return XiGlobalmasterTypeLegacyExchangeMapping
	 */
	public function __construct($_MIC = null,$_LegacyValues = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('MIC'=>$_MIC,'LegacyValues'=>$_LegacyValues));
	}
	/**
	 * Set MIC
	 * @param string MIC
	 * @return string
	 */
	public function setMIC($_MIC)
	{
		return ($this->MIC = $_MIC);
	}
	/**
	 * Get MIC
	 * @return string
	 */
	public function getMIC()
	{
		return $this->MIC;
	}
	/**
	 * Set LegacyValues
	 * @param string LegacyValues
	 * @return string
	 */
	public function setLegacyValues($_LegacyValues)
	{
		return ($this->LegacyValues = $_LegacyValues);
	}
	/**
	 * Get LegacyValues
	 * @return string
	 */
	public function getLegacyValues()
	{
		return $this->LegacyValues;
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