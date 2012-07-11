<?php
/**
 * Class file for SPMeetingsTypeGetMeetingsInformation
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeGetMeetingsInformation
 * @date 06/07/2012
 */
class SPMeetingsTypeGetMeetingsInformation extends SPMeetingsWsdlClass
{
	/**
	 * The requestFlags
	 * @var unsignedInt
	 */
	public $requestFlags;
	/**
	 * The lcid
	 * @var unsignedInt
	 */
	public $lcid;
	/**
	 * Constructor
	 * @param unsignedInt requestFlags
	 * @param unsignedInt lcid
	 * @return SPMeetingsTypeGetMeetingsInformation
	 */
	public function __construct($_requestFlags = null,$_lcid = null)
	{
		parent::__construct(array('requestFlags'=>$_requestFlags,'lcid'=>$_lcid));
	}
	/**
	 * Set requestFlags
	 * @param unsignedInt requestFlags
	 * @return unsignedInt
	 */
	public function setRequestFlags($_requestFlags)
	{
		return ($this->requestFlags = $_requestFlags);
	}
	/**
	 * Get requestFlags
	 * @return unsignedInt
	 */
	public function getRequestFlags()
	{
		return $this->requestFlags;
	}
	/**
	 * Set lcid
	 * @param unsignedInt lcid
	 * @return unsignedInt
	 */
	public function setLcid($_lcid)
	{
		return ($this->lcid = $_lcid);
	}
	/**
	 * Get lcid
	 * @return unsignedInt
	 */
	public function getLcid()
	{
		return $this->lcid;
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