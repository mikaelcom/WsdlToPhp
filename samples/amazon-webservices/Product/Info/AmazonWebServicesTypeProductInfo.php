<?php
/**
 * Class file for AmazonWebServicesTypeProductInfo
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeProductInfo
 * @date 10/07/2012
 */
class AmazonWebServicesTypeProductInfo extends AmazonWebServicesWsdlClass
{
	/**
	 * The TotalResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalResults;
	/**
	 * The TotalPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalPages;
	/**
	 * The ListName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ListName;
	/**
	 * The Details
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var DetailsArray
	 */
	public $Details;
	/**
	 * Constructor
	 * @param string TotalResults
	 * @param string TotalPages
	 * @param string ListName
	 * @param DetailsArray Details
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function __construct($_TotalResults = null,$_TotalPages = null,$_ListName = null,$_Details = null)
	{
		parent::__construct(array('TotalResults'=>$_TotalResults,'TotalPages'=>$_TotalPages,'ListName'=>$_ListName,'Details'=>$_Details));
	}
	/**
	 * Set TotalResults
	 * @param string TotalResults
	 * @return string
	 */
	public function setTotalResults($_TotalResults)
	{
		return ($this->TotalResults = $_TotalResults);
	}
	/**
	 * Get TotalResults
	 * @return string
	 */
	public function getTotalResults()
	{
		return $this->TotalResults;
	}
	/**
	 * Set TotalPages
	 * @param string TotalPages
	 * @return string
	 */
	public function setTotalPages($_TotalPages)
	{
		return ($this->TotalPages = $_TotalPages);
	}
	/**
	 * Get TotalPages
	 * @return string
	 */
	public function getTotalPages()
	{
		return $this->TotalPages;
	}
	/**
	 * Set ListName
	 * @param string ListName
	 * @return string
	 */
	public function setListName($_ListName)
	{
		return ($this->ListName = $_ListName);
	}
	/**
	 * Get ListName
	 * @return string
	 */
	public function getListName()
	{
		return $this->ListName;
	}
	/**
	 * Set Details
	 * @param DetailsArray Details
	 * @return DetailsArray
	 */
	public function setDetails($_Details)
	{
		return ($this->Details = $_Details);
	}
	/**
	 * Get Details
	 * @return DetailsArray
	 */
	public function getDetails()
	{
		return $this->Details;
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