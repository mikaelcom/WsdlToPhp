<?php
/**
 * Class file for ATReportingTypeGetLastMinute
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetLastMinute
 * @date 03/07/2012
 */
class ATReportingTypeGetLastMinute extends ATReportingWsdlClass
{
	/**
	 * The format
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var ATReportingTypePTRFormat
	 */
	public $format;
	/**
	 * Constructor
	 * @param ATReportingTypePTRFormat format
	 * @return ATReportingTypeGetLastMinute
	 */
	public function __construct($_format)
	{
		parent::__construct(array('format'=>$_format));
	}
	/**
	 * Set format
	 * @param PTRFormat format
	 * @return PTRFormat
	 */
	public function setFormat($_format)
	{
		return ($this->format = ATReportingTypePTRFormat::valueIsValid($_format)?$_format:null);
	}
	/**
	 * Get format
	 * @return ATReportingTypePTRFormat
	 */
	public function getFormat()
	{
		return $this->format;
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