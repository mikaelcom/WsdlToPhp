<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeExpirationBaseOfExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeExpirationBaseOfExtendedOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeExpirationBaseOfExtendedOption extends XiGlobalrealtimeoptionsTypeCommon
{
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExpirationDate;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Calls
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public $Calls;
	/**
	 * The Puts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public $Puts;
	/**
	 * Constructor
	 * @param string ExpirationDate
	 * @param int Month
	 * @param int Year
	 * @param XiGlobalrealtimeoptionsTypeArrayOfExtendedOption Calls
	 * @param XiGlobalrealtimeoptionsTypeArrayOfExtendedOption Puts
	 * @return XiGlobalrealtimeoptionsTypeExpirationBaseOfExtendedOption
	 */
	public function __construct($_ExpirationDate = null,$_Month,$_Year,$_Calls = null,$_Puts = null)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('ExpirationDate'=>$_ExpirationDate,'Month'=>$_Month,'Year'=>$_Year,'Calls'=>new XiGlobalrealtimeoptionsTypeArrayOfExtendedOption($_Calls),'Puts'=>new XiGlobalrealtimeoptionsTypeArrayOfExtendedOption($_Puts)));
	}
	/**
	 * Set ExpirationDate
	 * @param string ExpirationDate
	 * @return string
	 */
	public function setExpirationDate($_ExpirationDate)
	{
		return ($this->ExpirationDate = $_ExpirationDate);
	}
	/**
	 * Get ExpirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->ExpirationDate;
	}
	/**
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Calls
	 * @param ArrayOfExtendedOption Calls
	 * @return ArrayOfExtendedOption
	 */
	public function setCalls($_Calls)
	{
		return ($this->Calls = $_Calls);
	}
	/**
	 * Get Calls
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public function getCalls()
	{
		return $this->Calls;
	}
	/**
	 * Set Puts
	 * @param ArrayOfExtendedOption Puts
	 * @return ArrayOfExtendedOption
	 */
	public function setPuts($_Puts)
	{
		return ($this->Puts = $_Puts);
	}
	/**
	 * Get Puts
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedOption
	 */
	public function getPuts()
	{
		return $this->Puts;
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