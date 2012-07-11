<?php
/**
 * Class file for JmDataMovieAppTypeGetStoresFromIDsResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetStoresFromIDsResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetStoresFromIDsResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetStoresFromIDsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfStore
	 */
	public $GetStoresFromIDsResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfStore GetStoresFromIDsResult
	 * @return JmDataMovieAppTypeGetStoresFromIDsResponse
	 */
	public function __construct($_GetStoresFromIDsResult = null)
	{
		parent::__construct(array('GetStoresFromIDsResult'=>new JmDataMovieAppTypeArrayOfStore($_GetStoresFromIDsResult)));
	}
	/**
	 * Set GetStoresFromIDsResult
	 * @param ArrayOfStore GetStoresFromIDsResult
	 * @return ArrayOfStore
	 */
	public function setGetStoresFromIDsResult($_GetStoresFromIDsResult)
	{
		return ($this->GetStoresFromIDsResult = $_GetStoresFromIDsResult);
	}
	/**
	 * Get GetStoresFromIDsResult
	 * @return JmDataMovieAppTypeArrayOfStore
	 */
	public function getGetStoresFromIDsResult()
	{
		return $this->GetStoresFromIDsResult;
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