<?php
/**
 * Class file for XiReleasesTypeGetReleaseContentResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetReleaseContentResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetReleaseContentResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetReleaseContentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeRelease
	 */
	public $GetReleaseContentResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeRelease GetReleaseContentResult
	 * @return XiReleasesTypeGetReleaseContentResponse
	 */
	public function __construct($_GetReleaseContentResult = null)
	{
		parent::__construct(array('GetReleaseContentResult'=>$_GetReleaseContentResult));
	}
	/**
	 * Set GetReleaseContentResult
	 * @param Release GetReleaseContentResult
	 * @return Release
	 */
	public function setGetReleaseContentResult($_GetReleaseContentResult)
	{
		return ($this->GetReleaseContentResult = $_GetReleaseContentResult);
	}
	/**
	 * Get GetReleaseContentResult
	 * @return XiReleasesTypeRelease
	 */
	public function getGetReleaseContentResult()
	{
		return $this->GetReleaseContentResult;
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