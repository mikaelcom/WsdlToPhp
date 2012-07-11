<?php
/**
 * Class file for SODisconnectedTypeDisconnectedInfoResult
 * @date 08/07/2012
 */
/**
 * Class SODisconnectedTypeDisconnectedInfoResult
 * @date 08/07/2012
 */
class SODisconnectedTypeDisconnectedInfoResult extends SODisconnectedWsdlClass
{
	/**
	 * The DisconnectedInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODisconnectedTypeDisconnectedInfo
	 */
	public $DisconnectedInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODisconnectedTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SODisconnectedTypeDisconnectedInfo DisconnectedInfo
	 * @param SODisconnectedTypeError Error
	 * @return SODisconnectedTypeDisconnectedInfoResult
	 */
	public function __construct($_DisconnectedInfo = null,$_Error = null)
	{
		parent::__construct(array('DisconnectedInfo'=>$_DisconnectedInfo,'Error'=>$_Error));
	}
	/**
	 * Set DisconnectedInfo
	 * @param DisconnectedInfo DisconnectedInfo
	 * @return DisconnectedInfo
	 */
	public function setDisconnectedInfo($_DisconnectedInfo)
	{
		return ($this->DisconnectedInfo = $_DisconnectedInfo);
	}
	/**
	 * Get DisconnectedInfo
	 * @return SODisconnectedTypeDisconnectedInfo
	 */
	public function getDisconnectedInfo()
	{
		return $this->DisconnectedInfo;
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
	 * @return SODisconnectedTypeError
	 */
	public function getError()
	{
		return $this->Error;
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