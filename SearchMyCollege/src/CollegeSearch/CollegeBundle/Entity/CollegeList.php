<?php

namespace CollegeSearch\CollegeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * CollegeList
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CollegeSearch\CollegeBundle\Entity\CollegeListRepository")
 */
class CollegeList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="collegeList")
     */
    protected $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="bigint")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=100)
     */
    private $photo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;

    /**
     * 
     *
     * @ORM\Column(name="courses", type="text")
     */
    protected $courses;

    /**
     * @var string
     *
     * @ORM\Column(name="fees", type="decimal")
     */
    private $fees;
    
    public function __construct()
    {
    	$this->comments = new ArrayCollection();
    }
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return CollegeList
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CollegeList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return CollegeList
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return CollegeList
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return CollegeList
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return CollegeList
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

  

    /**
     * Set fees
     *
     * @param string $fees
     * @return CollegeList
     */
    public function setFees($fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Get fees
     *
     * @return string 
     */
    public function getFees()
    {
        return $this->fees;
    }
    
    /**
     * Set city
     *
     * @param string $city
     * @return CollegeList
     */
    public function setCity($city)
    {
    	$this->city = $city;
    
    	return $this;
    }
    
    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
    	return $this->city;
    }
	
	

    /**
     * Set info
     *
     * @param string $info
     * @return CollegeList
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo($length = null)
    {
    	if (false === is_null($length) && $length > 0)
    		return substr($this->info, 0, $length);
    	else
        return $this->info;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CollegeList
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function _toString()
    {
    	return $this->courses;
    }

    /**
     * Set courses
     *
     * @param string $courses
     * @return CollegeList
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;

        return $this;
    }

    /**
     * Get courses
     *
     * @return string 
     */
    public function getCourses()
    {
        return $this->courses;
    }
    
    public function getnewcourses()
    {
    	$x=array();
    	$x=explode(",", $this->courses);
    	print_r($x);
    	return $x;
    }
 

    /**
     * Add comments
     *
     * @param \CollegeSearch\CollegeBundle\Entity\Comments $comments
     * @return CollegeList
     */
    public function addComment(\CollegeSearch\CollegeBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \CollegeSearch\CollegeBundle\Entity\Comments $comments
     */
    public function removeComment(\CollegeSearch\CollegeBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
