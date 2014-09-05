<?php

namespace CollegeSearch\CollegeBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
//use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * @ORM\Entity(repositoryClass="CollegeSearch\CollegeBundle\Entity\ApplyNowFormRepository")
 * 
 */ 
class ApplyNowForm
{
	private $firstName;
	
	private $lastName;
	
	private $addressLine1;
	
	private $addressLine2;
	
	private $city;
	
	private $zipcode;
	
	private $contactNo;
	
	private $dateOfBirth;
	
	private $gender;
	
	private $emailID;
	
	private $universityName;
	
	private $passingYear;
	
	private $classSecured;
	
	private $marksSecured;
	
	private $course;
	
	
	public function getFirstName() {
		return $this->firstName;
	}
	
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
		return $this;
	}
	
	public function getLastName() {
		return $this->lastName;
	}
	
	public function setLastName($lastName) {
		$this->lastName = $lastName;
		return $this;
	}
	
	public function getAddressLine1() {
		return $this->addressLine1;
	}
	
	public function setAddressLine1($addressLine1) {
		$this->addressLine1 = $addressLine1;
		return $this;
	}
	
	public function getAddressLine2() {
		return $this->addressLine2;
	}
	
	public function setAddressLine2($addressLine2) {
		$this->addressLine2 = $addressLine2;
		return $this;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		return $this;
	}
	
	public function getZipcode() {
		return $this->zipcode;
	}
	
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
		return $this;
	}
	
	public function getContactNo() {
		return $this->contactNo;
	}
	
	public function setContactNo($contactNo) {
		$this->contactNo = $contactNo;
		return $this;
	}
	
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}
	
	public function setDateOfBirth($dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
		return $this;
	}
	
	public function getGender() {
		return $this->gender;
	}
	
	public function setGender($gender) {
		$this->gender = $gender;
		return $this;
	}
	
	public function getEmailID() {
		return $this->emailID;
	}
	
	public function setEmailID($emailID) {
		$this->emailID = $emailID;
		return $this;
	}
	
	public function getUniversityName() {
		return $this->universityName;
	}
	
	public function setUniversityName($universityName) {
		$this->universityName = $universityName;
		return $this;
	}
	
	public function getPassingYear() {
		return $this->passingYear;
	}
	
	public function setPassingYear($passingYear) {
		$this->passingYear = $passingYear;
		return $this;
	}
	
	public function getClassSecured() {
		return $this->classSecured;
	}
	
	public function setClassSecured($classSecured) {
		$this->classSecured = $classSecured;
		return $this;
	}
	
	public function getMarksSecured() {
		return $this->marksSecured;
	}
	
	public function setMarksSecured($marksSecured) {
		$this->marksSecured = $marksSecured;
		return $this;
	}
	
	public function getCourse() {
		return $this->course;
	}
	
	public function setCourse($course) {
		$this->course = $course;
		return $this;
	}

}
