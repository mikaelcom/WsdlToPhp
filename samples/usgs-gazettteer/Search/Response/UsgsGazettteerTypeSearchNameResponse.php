<?php
/**
 * Class file for UsgsGazettteerTypeSearchNameResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeSearchNameResponse
 * @date 08/07/2012
 */
class UsgsGazettteerTypeSearchNameResponse extends UsgsGazettteerWsdlClass
{
	/**
	 * The searchNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $searchNameResult;
	/**
	 * Constructor
	 * @param string searchNameResult
	 * @return UsgsGazettteerTypeSearchNameResponse
	 */
	public function __construct($_searchNameResult = null)
	{
		parent::__construct(array('searchNameResult'=>$_searchNameResult));
	}
	/**
	 * Set searchNameResult
	 * @param string searchNameResult
	 * @return string
	 */
	public function setSearchNameResult($_searchNameResult)
	{
		return ($this->searchNameResult = $_searchNameResult);
	}
	/**
	 * Get searchNameResult
	 * @return string
	 */
	public function getSearchNameResult()
	{
		return $this->searchNameResult;
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