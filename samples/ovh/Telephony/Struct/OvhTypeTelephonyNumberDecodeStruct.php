<?php
/**
 * Class file for OvhTypeTelephonyNumberDecodeStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberDecodeStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberDecodeStruct extends OvhWsdlClass
{
	/**
	 * The numberDisplay
	 * @var string
	 */
	public $numberDisplay;
	/**
	 * The numberInternal
	 * @var string
	 */
	public $numberInternal;
	/**
	 * The numberInternational
	 * @var string
	 */
	public $numberInternational;
	/**
	 * The numberNational
	 * @var string
	 */
	public $numberNational;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The cirpackNature
	 * @var string
	 */
	public $cirpackNature;
	/**
	 * The cirpackNumber
	 * @var string
	 */
	public $cirpackNumber;
	/**
	 * Constructor
	 * @param string numberDisplay
	 * @param string numberInternal
	 * @param string numberInternational
	 * @param string numberNational
	 * @param string countryCode
	 * @param string language
	 * @param string cirpackNature
	 * @param string cirpackNumber
	 * @return OvhTypeTelephonyNumberDecodeStruct
	 */
	public function __construct($_numberDisplay = null,$_numberInternal = null,$_numberInternational = null,$_numberNational = null,$_countryCode = null,$_language = null,$_cirpackNature = null,$_cirpackNumber = null)
	{
		parent::__construct(array('numberDisplay'=>$_numberDisplay,'numberInternal'=>$_numberInternal,'numberInternational'=>$_numberInternational,'numberNational'=>$_numberNational,'countryCode'=>$_countryCode,'language'=>$_language,'cirpackNature'=>$_cirpackNature,'cirpackNumber'=>$_cirpackNumber));
	}
	/**
	 * Set numberDisplay
	 * @param string numberDisplay
	 * @return string
	 */
	public function setNumberDisplay($_numberDisplay)
	{
		return ($this->numberDisplay = $_numberDisplay);
	}
	/**
	 * Get numberDisplay
	 * @return string
	 */
	public function getNumberDisplay()
	{
		return $this->numberDisplay;
	}
	/**
	 * Set numberInternal
	 * @param string numberInternal
	 * @return string
	 */
	public function setNumberInternal($_numberInternal)
	{
		return ($this->numberInternal = $_numberInternal);
	}
	/**
	 * Get numberInternal
	 * @return string
	 */
	public function getNumberInternal()
	{
		return $this->numberInternal;
	}
	/**
	 * Set numberInternational
	 * @param string numberInternational
	 * @return string
	 */
	public function setNumberInternational($_numberInternational)
	{
		return ($this->numberInternational = $_numberInternational);
	}
	/**
	 * Get numberInternational
	 * @return string
	 */
	public function getNumberInternational()
	{
		return $this->numberInternational;
	}
	/**
	 * Set numberNational
	 * @param string numberNational
	 * @return string
	 */
	public function setNumberNational($_numberNational)
	{
		return ($this->numberNational = $_numberNational);
	}
	/**
	 * Get numberNational
	 * @return string
	 */
	public function getNumberNational()
	{
		return $this->numberNational;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set cirpackNature
	 * @param string cirpackNature
	 * @return string
	 */
	public function setCirpackNature($_cirpackNature)
	{
		return ($this->cirpackNature = $_cirpackNature);
	}
	/**
	 * Get cirpackNature
	 * @return string
	 */
	public function getCirpackNature()
	{
		return $this->cirpackNature;
	}
	/**
	 * Set cirpackNumber
	 * @param string cirpackNumber
	 * @return string
	 */
	public function setCirpackNumber($_cirpackNumber)
	{
		return ($this->cirpackNumber = $_cirpackNumber);
	}
	/**
	 * Get cirpackNumber
	 * @return string
	 */
	public function getCirpackNumber()
	{
		return $this->cirpackNumber;
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