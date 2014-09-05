<?php

namespace CollegeSearch\CollegeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use CollegeSearch\CollegeBundle\Entity\CollegeList;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CollegeSearch\CollegeBundle\Entity\CollegeListRepository;



class ApplyNowFormType extends AbstractType
{
	private $doctrine;
	
	public function __construct(RegistryInterface $doctrine)
	{
		$this->doctrine = $doctrine;
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'id' => null,
				'array'=> null,
		));
	}
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$id = $options['id'];
    	$array = $options['array'];
    	$builder->add('firstName');
    	$builder->add('lastName');
    	$builder->add('addressLine1');
    	$builder->add('addressLine2');
    	$builder->add('city');
    	$builder->add('zipcode', 'number');
    	$builder->add('gender', 'choice', array('choices'=>array('m'=>'Male', 'f'=>'Female'), 'required'=>false, 'empty_value' => false,));
    	$builder->add('dateOfBirth', 'birthday');
    	$builder->add('contactNo');
    	$builder->add('emailID', 'email', array('label'=>'Email ID'));
    	$builder->add('universityName');
    	$builder->add('passingYear', 'date');
    	$builder->add('classSecured', 'choice', array('choices'=>array('pass class','second class', 'first class', 'distinction')));
    	$builder->add('marksSecured', 'number');
    	//$builder->add('collegeList', 'entity', array('class'=>'CollegeSearchCollegeBundle:CollegeList', 'choices'=>$this->getCoursesAll($id), 'property'=>'courses', 'required'=>false, 'multiple'=>true, 'empty_value' => false,));
    	$builder->add('course', 'choice', array('choices'=>$array));
    	$builder->add('Apply', 'submit');
    }
    
    private function getCoursesAll($id)
    {
    	$courses=$this->doctrine->getRepository('CollegeSearchCollegeBundle:CollegeList')->getCourses($id);
    	//$tags=array();
    	//$tags = explode(",", $courses[0]->courses);
    	return $courses;
    }

    
    public function getName()
    {
    	return 'ApplyNow';
    }
}
