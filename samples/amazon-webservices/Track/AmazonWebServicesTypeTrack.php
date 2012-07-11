<?php
/**
 * Class file for AmazonWebServicesTypeTrack
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeTrack
 * @date 10/07/2012
 */
class AmazonWebServicesTypeTrack extends AmazonWebServicesWsdlClass
{
	/**
	 * The TrackName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TrackName;
	/**
	 * The ByArtist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ByArtist;
	/**
	 * Constructor
	 * @param string TrackName
	 * @param string ByArtist
	 * @return AmazonWebServicesTypeTrack
	 */
	public function __construct($_TrackName = null,$_ByArtist = null)
	{
		parent::__construct(array('TrackName'=>$_TrackName,'ByArtist'=>$_ByArtist));
	}
	/**
	 * Set TrackName
	 * @param string TrackName
	 * @return string
	 */
	public function setTrackName($_TrackName)
	{
		return ($this->TrackName = $_TrackName);
	}
	/**
	 * Get TrackName
	 * @return string
	 */
	public function getTrackName()
	{
		return $this->TrackName;
	}
	/**
	 * Set ByArtist
	 * @param string ByArtist
	 * @return string
	 */
	public function setByArtist($_ByArtist)
	{
		return ($this->ByArtist = $_ByArtist);
	}
	/**
	 * Get ByArtist
	 * @return string
	 */
	public function getByArtist()
	{
		return $this->ByArtist;
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