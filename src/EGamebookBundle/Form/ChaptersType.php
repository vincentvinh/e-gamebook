<?php

namespace EGamebookBundle\Form;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\StringType;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChaptersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('number', IntegerType::class)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
           // !! FileType->http://symfony.com/doc/current/reference/forms/types/file.html
            ->add('decision', TextareaType::class)
            ->add('buttonText', TextType::class)
            ->add('fichiers', FichierType::class)
           ->getForm();
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EGamebookBundle\Entity\Chapters'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'egamebookbundle_chapters';
    }
}
