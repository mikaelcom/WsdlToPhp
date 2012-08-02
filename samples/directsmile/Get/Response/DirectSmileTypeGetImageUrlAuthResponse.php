<?php
/**
 * Class file for DirectSmileTypeGetImageUrlAuthResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetImageUrlAuthResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetImageUrlAuthResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetImageUrlAuthResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetImageUrlAuthResult;
	/**
	 * Constructor
	 * @param string GetImageUrlAuthResult
	 * @return DirectSmileTypeGetImageUrlAuthResponse
	 */
	public function __construct($_GetImageUrlAuthResult = null)
	{
		parent::__construct(array('GetImageUrlAuthResult'=>$_GetImageUrlAuthResult));
	}
	/**
	 * Set GetImageUrlAuthResult
	 * @param string GetImageUrlAuthResult
	 * @return string
	 */
	public function setGetImageUrlAuthResult($_GetImageUrlAuthResult)
	{
		return ($this->GetImageUrlAuthResult = $_GetImageUrlAuthResult);
	}
	/**
	 * Get GetImageUrlAuthResult
	 * @return string
	 */
	public function getGetImageUrlAuthResult()
	{
		return $this->GetImageUrlAuthResult;
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