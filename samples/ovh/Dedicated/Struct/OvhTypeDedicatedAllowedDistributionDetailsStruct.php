<?php
/**
 * Class file for OvhTypeDedicatedAllowedDistributionDetailsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAllowedDistributionDetailsStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedAllowedDistributionDetailsStruct extends OvhWsdlClass
{
	/**
	 * The language
	 * @var OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public $language;
	/**
	 * The languageList
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $languageList;
	/**
	 * The defaultLanguage
	 * @var string
	 */
	public $defaultLanguage;
	/**
	 * The bitFormat
	 * @var OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public $bitFormat;
	/**
	 * The longName
	 * @var string
	 */
	public $longName;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType language
	 * @param OvhTypeMyArrayOfStringType languageList
	 * @param string defaultLanguage
	 * @param OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType bitFormat
	 * @param string longName
	 * @param string name
	 * @return OvhTypeDedicatedAllowedDistributionDetailsStruct
	 */
	public function __construct($_language = null,$_languageList = null,$_defaultLanguage = null,$_bitFormat = null,$_longName = null,$_name = null)
	{
		parent::__construct(array('language'=>new OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType($_language),'languageList'=>new OvhTypeMyArrayOfStringType($_languageList),'defaultLanguage'=>$_defaultLanguage,'bitFormat'=>new OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType($_bitFormat),'longName'=>$_longName,'name'=>$_name));
	}
	/**
	 * Set language
	 * @param MyArrayOfDedicatedAllowedDistributionLanguageStructType language
	 * @return MyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionLanguageStructType
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set languageList
	 * @param MyArrayOfStringType languageList
	 * @return MyArrayOfStringType
	 */
	public function setLanguageList($_languageList)
	{
		return ($this->languageList = $_languageList);
	}
	/**
	 * Get languageList
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getLanguageList()
	{
		return $this->languageList;
	}
	/**
	 * Set defaultLanguage
	 * @param string defaultLanguage
	 * @return string
	 */
	public function setDefaultLanguage($_defaultLanguage)
	{
		return ($this->defaultLanguage = $_defaultLanguage);
	}
	/**
	 * Get defaultLanguage
	 * @return string
	 */
	public function getDefaultLanguage()
	{
		return $this->defaultLanguage;
	}
	/**
	 * Set bitFormat
	 * @param MyArrayOfDedicatedAllowedDistributionBitFormatStructType bitFormat
	 * @return MyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public function setBitFormat($_bitFormat)
	{
		return ($this->bitFormat = $_bitFormat);
	}
	/**
	 * Get bitFormat
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionBitFormatStructType
	 */
	public function getBitFormat()
	{
		return $this->bitFormat;
	}
	/**
	 * Set longName
	 * @param string longName
	 * @return string
	 */
	public function setLongName($_longName)
	{
		return ($this->longName = $_longName);
	}
	/**
	 * Get longName
	 * @return string
	 */
	public function getLongName()
	{
		return $this->longName;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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