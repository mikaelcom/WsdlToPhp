<?php
/**
 * Class file for JmDataMovieAppTypeGetNearByStoresResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetNearByStoresResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetNearByStoresResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetNearByStoresResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfStore
	 */
	public $GetNearByStoresResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfStore GetNearByStoresResult
	 * @return JmDataMovieAppTypeGetNearByStoresResponse
	 */
	public function __construct($_GetNearByStoresResult = null)
	{
		parent::__construct(array('GetNearByStoresResult'=>new JmDataMovieAppTypeArrayOfStore($_GetNearByStoresResult)));
	}
	/**
	 * Set GetNearByStoresResult
	 * @param ArrayOfStore GetNearByStoresResult
	 * @return ArrayOfStore
	 */
	public function setGetNearByStoresResult($_GetNearByStoresResult)
	{
		return ($this->GetNearByStoresResult = $_GetNearByStoresResult);
	}
	/**
	 * Get GetNearByStoresResult
	 * @return JmDataMovieAppTypeArrayOfStore
	 */
	public function getGetNearByStoresResult()
	{
		return $this->GetNearByStoresResult;
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