<?php
/**
 * Class file for SODisconnectedTypeGetDisconnectedInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SODisconnectedTypeGetDisconnectedInfoResponse
 * @date 08/07/2012
 */
class SODisconnectedTypeGetDisconnectedInfoResponse extends SODisconnectedWsdlClass
{
	/**
	 * The GetDisconnectedInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODisconnectedTypeDisconnectedInfoResult
	 */
	public $GetDisconnectedInfoResult;
	/**
	 * Constructor
	 * @param SODisconnectedTypeDisconnectedInfoResult GetDisconnectedInfoResult
	 * @return SODisconnectedTypeGetDisconnectedInfoResponse
	 */
	public function __construct($_GetDisconnectedInfoResult = null)
	{
		parent::__construct(array('GetDisconnectedInfoResult'=>$_GetDisconnectedInfoResult));
	}
	/**
	 * Set GetDisconnectedInfoResult
	 * @param DisconnectedInfoResult GetDisconnectedInfoResult
	 * @return DisconnectedInfoResult
	 */
	public function setGetDisconnectedInfoResult($_GetDisconnectedInfoResult)
	{
		return ($this->GetDisconnectedInfoResult = $_GetDisconnectedInfoResult);
	}
	/**
	 * Get GetDisconnectedInfoResult
	 * @return SODisconnectedTypeDisconnectedInfoResult
	 */
	public function getGetDisconnectedInfoResult()
	{
		return $this->GetDisconnectedInfoResult;
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