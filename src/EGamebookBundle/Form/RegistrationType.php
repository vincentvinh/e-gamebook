<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 24/06/17
 * Time: 22:33
 */



 namespace  EGamebookBundle\Form;

 use Symfony\Bridge\Doctrine\Form\Type\EntityType;
 use Symfony\Component\Form\AbstractType;
 use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

 class RegistrationType extends AbstractType
 {
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
         $builder->add('gender', ChoiceType::class, array(
                                     'choices' => array(
                                         'men' => 'M',
                                         'woman' => 'W',
                                         'between' => null,
                                     ),
                                 ))
                 ->add('firstname')
                 ->add('lastname')
                 ;


                                     }

     public function getParent()
     {
         return 'FOS\UserBundle\Form\Type\RegistrationFormType';

         // Or for Symfony < 2.8
         // return 'fos_user_registration';
     }

     public function getBlockPrefix()
     {
         return 'app_user_registration';
     }


 }