<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumesSetItemResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumesSetItemResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumesSetItemResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The size
	 * @var string
	 */
	public $size;
	/**
	 * The snapshotId
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The createTime
	 * @var dateTime
	 */
	public $createTime;
	/**
	 * The attachmentSet
	 * @var AmazonEc2TypeAttachmentSetResponseType
	 */
	public $attachmentSet;
	/**
	 * The tagSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeResourceTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string size
	 * @param string snapshotId
	 * @param string availabilityZone
	 * @param string status
	 * @param dateTime createTime
	 * @param AmazonEc2TypeAttachmentSetResponseType attachmentSet
	 * @param AmazonEc2TypeResourceTagSetType tagSet
	 * @return AmazonEc2TypeDescribeVolumesSetItemResponseType
	 */
	public function __construct($_volumeId = null,$_size = null,$_snapshotId = null,$_availabilityZone = null,$_status = null,$_createTime = null,$_attachmentSet = null,$_tagSet = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'size'=>$_size,'snapshotId'=>$_snapshotId,'availabilityZone'=>$_availabilityZone,'status'=>$_status,'createTime'=>$_createTime,'attachmentSet'=>$_attachmentSet,'tagSet'=>$_tagSet));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
	}
	/**
	 * Set size
	 * @param string size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return string
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set createTime
	 * @param dateTime createTime
	 * @return dateTime
	 */
	public function setCreateTime($_createTime)
	{
		return ($this->createTime = $_createTime);
	}
	/**
	 * Get createTime
	 * @return dateTime
	 */
	public function getCreateTime()
	{
		return $this->createTime;
	}
	/**
	 * Set attachmentSet
	 * @param AttachmentSetResponseType attachmentSet
	 * @return AttachmentSetResponseType
	 */
	public function setAttachmentSet($_attachmentSet)
	{
		return ($this->attachmentSet = $_attachmentSet);
	}
	/**
	 * Get attachmentSet
	 * @return AmazonEc2TypeAttachmentSetResponseType
	 */
	public function getAttachmentSet()
	{
		return $this->attachmentSet;
	}
	/**
	 * Set tagSet
	 * @param ResourceTagSetType tagSet
	 * @return ResourceTagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeResourceTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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