<?php
/**
 * Class file for SOGeoPhonePlusTypeGetPhoneInfoResult
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeGetPhoneInfoResult
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeGetPhoneInfoResult extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypeError
	 */
	public $Error;
	/**
	 * The PhoneInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypePhoneInfo
	 */
	public $PhoneInfo;
	/**
	 * The TokensUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TokensUsed;
	/**
	 * The DEBUG
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DEBUG;
	/**
	 * Constructor
	 * @param SOGeoPhonePlusTypeError Error
	 * @param SOGeoPhonePlusTypePhoneInfo PhoneInfo
	 * @param string TokensUsed
	 * @param string DEBUG
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResult
	 */
	public function __construct($_Error = null,$_PhoneInfo = null,$_TokensUsed = null,$_DEBUG = null)
	{
		parent::__construct(array('Error'=>$_Error,'PhoneInfo'=>$_PhoneInfo,'TokensUsed'=>$_TokensUsed,'DEBUG'=>$_DEBUG));
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOGeoPhonePlusTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set PhoneInfo
	 * @param PhoneInfo PhoneInfo
	 * @return PhoneInfo
	 */
	public function setPhoneInfo($_PhoneInfo)
	{
		return ($this->PhoneInfo = $_PhoneInfo);
	}
	/**
	 * Get PhoneInfo
	 * @return SOGeoPhonePlusTypePhoneInfo
	 */
	public function getPhoneInfo()
	{
		return $this->PhoneInfo;
	}
	/**
	 * Set TokensUsed
	 * @param string TokensUsed
	 * @return string
	 */
	public function setTokensUsed($_TokensUsed)
	{
		return ($this->TokensUsed = $_TokensUsed);
	}
	/**
	 * Get TokensUsed
	 * @return string
	 */
	public function getTokensUsed()
	{
		return $this->TokensUsed;
	}
	/**
	 * Set DEBUG
	 * @param string DEBUG
	 * @return string
	 */
	public function setDEBUG($_DEBUG)
	{
		return ($this->DEBUG = $_DEBUG);
	}
	/**
	 * Get DEBUG
	 * @return string
	 */
	public function getDEBUG()
	{
		return $this->DEBUG;
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