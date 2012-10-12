<?php
/**
 * Class file for ConeSearchTypeConeSearchResponse
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeConeSearchResponse
 * @date 13/10/2012
 */
class ConeSearchTypeConeSearchResponse extends ConeSearchWsdlClass
{
	/**
	 * The ConeSearchResult
	 * @var ConeSearchTypeVOTABLE
	 */
	public $ConeSearchResult;
	/**
	 * Constructor
	 * @param ConeSearchTypeVOTABLE ConeSearchResult
	 * @return ConeSearchTypeConeSearchResponse
	 */
	public function __construct($_ConeSearchResult = null)
	{
		parent::__construct(array('ConeSearchResult'=>$_ConeSearchResult));
	}
	/**
	 * Set ConeSearchResult
	 * @param VOTABLE ConeSearchResult
	 * @return VOTABLE
	 */
	public function setConeSearchResult($_ConeSearchResult)
	{
		return ($this->ConeSearchResult = $_ConeSearchResult);
	}
	/**
	 * Get ConeSearchResult
	 * @return ConeSearchTypeVOTABLE
	 */
	public function getConeSearchResult()
	{
		return $this->ConeSearchResult;
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