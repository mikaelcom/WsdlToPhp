<?php
/**
 * Class file for CdyneDeathIndexTypeSearchDeceasedInfoResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeSearchDeceasedInfoResponse
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeSearchDeceasedInfoResponse extends CdyneDeathIndexWsdlClass
{
	/**
	 * The SearchDeceasedInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneDeathIndexTypeDeathIndexResponse
	 */
	public $SearchDeceasedInfoResult;
	/**
	 * Constructor
	 * @param CdyneDeathIndexTypeDeathIndexResponse SearchDeceasedInfoResult
	 * @return CdyneDeathIndexTypeSearchDeceasedInfoResponse
	 */
	public function __construct($_SearchDeceasedInfoResult = null)
	{
		parent::__construct(array('SearchDeceasedInfoResult'=>$_SearchDeceasedInfoResult));
	}
	/**
	 * Set SearchDeceasedInfoResult
	 * @param DeathIndexResponse SearchDeceasedInfoResult
	 * @return DeathIndexResponse
	 */
	public function setSearchDeceasedInfoResult($_SearchDeceasedInfoResult)
	{
		return ($this->SearchDeceasedInfoResult = $_SearchDeceasedInfoResult);
	}
	/**
	 * Get SearchDeceasedInfoResult
	 * @return CdyneDeathIndexTypeDeathIndexResponse
	 */
	public function getSearchDeceasedInfoResult()
	{
		return $this->SearchDeceasedInfoResult;
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