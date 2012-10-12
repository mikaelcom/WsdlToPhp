<?php
/**
 * Class file for ConeSearchTypeRevisionsResponse
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeRevisionsResponse
 * @date 13/10/2012
 */
class ConeSearchTypeRevisionsResponse extends ConeSearchWsdlClass
{
	/**
	 * The RevisionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeArrayOfString
	 */
	public $RevisionsResult;
	/**
	 * Constructor
	 * @param ConeSearchTypeArrayOfString RevisionsResult
	 * @return ConeSearchTypeRevisionsResponse
	 */
	public function __construct($_RevisionsResult = null)
	{
		parent::__construct(array('RevisionsResult'=>new ConeSearchTypeArrayOfString($_RevisionsResult)));
	}
	/**
	 * Set RevisionsResult
	 * @param ArrayOfString RevisionsResult
	 * @return ArrayOfString
	 */
	public function setRevisionsResult($_RevisionsResult)
	{
		return ($this->RevisionsResult = $_RevisionsResult);
	}
	/**
	 * Get RevisionsResult
	 * @return ConeSearchTypeArrayOfString
	 */
	public function getRevisionsResult()
	{
		return $this->RevisionsResult;
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