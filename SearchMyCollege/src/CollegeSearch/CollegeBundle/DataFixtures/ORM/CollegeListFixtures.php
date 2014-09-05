<?php
namespace CollegeSearch\CollegeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CollegeSearch\CollegeBundle\Entity\CollegeList;

class CollegeListFixtures extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$list1 = new CollegeList();
		$list1->setCategory('Junior College');
		$list1->setName('Sathaye College');
		$list1->setAddress('Dixit Road, Vile Parle East, Mumbai-400057');
		$list1->setCity('Vile Parle');
		$list1->setPhone(022445566);
		$list1->setUrl('www.sathayecollege.com');
		$list1->setPhoto('sathaye.jpg');
		$list1->setCourses('Arts, Commerce, Science, Management');
		$list1->setFees(15000);
		$list1->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list1->setEmail("some1@somewhere.com");
		$manager->persist($list1);
		
		$list2 = new CollegeList();
		$list2->setCategory('Junior College');
		$list2->setName('Jai Hind College');
		$list2->setAddress('23-24, A Road, Churchgate, Mumbai-400020');
		$list2->setCity('Churchgate');
		$list2->setPhone(022445566);
		$list2->setUrl('www.jayhindcollege.com');
		$list2->setPhoto('jayhind.jpg');
		$list2->setCourses('Arts, Commerce, Science, Management');
		$list2->setFees(15000);
		$list2->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list2->setEmail("some1@somewhere.com");
		$manager->persist($list2);
		
		$list3 = new CollegeList();
		$list3->setCategory('Engineering College');
		$list3->setName('K C College Of Engineering');
		$list3->setAddress('Near Satguru Garden, Kopari Colony, Mith Bunder Road, Thane East, Mumbai - 400603');
		$list3->setCity('Thane');
		$list3->setPhone(022445566);
		$list3->setUrl('www.kccoe.org');
		$list3->setPhoto('kccoe.jpg');
		$list3->setCourses('BE Computer, BE Electronics, BE EXTC, BE IT');
		$list3->setFees(15000);
		$list3->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list3->setEmail("some1@somewhere.com");
		$manager->persist($list3);
		
		$list4 = new CollegeList();
		$list4->setCategory('Engineering College');
		$list4->setName('M H Saboo Siddik College Of Engineering');
		$list4->setAddress('8, Saboo Siddik Polytechnic Road, Byculla, Mumbai 400008');
		$list4->setCity('Byculla');
		$list4->setPhone(022445566);
		$list4->setUrl('www.mhssce.ac.in');
		$list4->setPhoto('saboosidhik.png');
		$list4->setCourses('BE Computer, BE Electronics, BE EXTC, BE IT, BE Mechanical, BE Civil, BE Automobile');
		$list4->setFees(15000);
		$list4->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list4->setEmail("some1@somewhere.com");
		$manager->persist($list4);
		
		$list5 = new CollegeList();
		$list5->setCategory('Medical College');
		$list5->setName('Grant Medical College');
		$list5->setAddress('Grant Medical College and Sir JJ Group of Hospitals, Byculla, Mumbai. 400008');
		$list5->setCity('Byculla');
		$list5->setPhone(022445566);
		$list5->setUrl('www.gmcjjh.org');
		$list5->setPhoto('gmc.jpg');
		$list5->setCourses('MBBS, MD, MS');
		$list5->setFees(15000);
		$list5->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list5->setEmail("some1@somewhere.com");
		$manager->persist($list5);
		
		$list6 = new CollegeList();
		$list6->setCategory('Medical College');
		$list6->setName('Nair Medical College');
		$list6->setAddress('pposite Maratha Mandir Cinema, Dr Ananadrao Nair Mg, Mumbai Central, Mumbai - 400008');
		$list6->setCity('Mumbai Central');
		$list6->setPhone(022445566);
		$list6->setUrl('www.tnmcnair.com');
		$list6->setPhoto('nair.jpg');
		$list6->setCourses('MBBS, MD, MS, BPTh, BOTh, Nursing');
		$list6->setFees(15000);
		$list6->setInfo("Grumpy wizards make toxic brew for the evil Queen and Jack. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.");
		$list6->setEmail("some1@somewhere.com");
		$manager->persist($list6);
		
		$manager->flush();
		
		$this->addReference('collegeList-1', $list1);
		$this->addReference('collegeList-2', $list2);
		$this->addReference('collegeList-3', $list3);
		$this->addReference('collegeList-4', $list4);
		$this->addReference('collegeList-5', $list5);
		$this->addReference('collegeList-6', $list6);
		
	}
	
	public function getOrder()
	{
		return 1;
	}
}