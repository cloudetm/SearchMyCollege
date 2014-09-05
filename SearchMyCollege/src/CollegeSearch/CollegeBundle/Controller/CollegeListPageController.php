<?php
namespace CollegeSearch\CollegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CollegeSearch\CollegeBundle\Entity\CollegeList;
use CollegeSearch\CollegeBundle\Entity\ApplyNowForm;
use CollegeSearch\CollegeBundle\Form\ApplyNowFormType;

class CollegeListPageController extends Controller
{
	public function showAction($category)
	{
		$collegeList = new CollegeList();
		$list=$this->getDoctrine()->getRepository('CollegeSearchCollegeBundle:CollegeList')->findBy(array('category' => $category));
		return $this->render('CollegeSearchCollegeBundle:CollegeListPage:show.html.twig', array('list' => $list, 'category' => $category));
	}
	
	public function collegeDetailAction($id)
	{
		$colDetail = $this->getDoctrine()->getRepository('CollegeSearchCollegeBundle:CollegeList')->find($id);
		if (!$colDetail){
			throw $this->createNotFoundException('Unable to find college details.');
		}
		
		$courses=$this->getDoctrine()->getRepository('CollegeSearchCollegeBundle:CollegeList')->getCourses($id);
		
		$applyNow = new ApplyNowForm();
		$form = $this->createForm(new ApplyNowFormType($this->getDoctrine()), $applyNow, array('id'=>$id, 'array'=>$courses));
		
		$comments = $this->getDoctrine()->getRepository('CollegeSearchCollegeBundle:Comments')->getComments($colDetail->getId());
		
		return $this->render('CollegeSearchCollegeBundle:CollegeListPage:collegeDetail.html.twig', array('colDetail'=>$colDetail, 'applyNowform'=>$form->createView(), 'comments'  => $comments));
	}
	

}
