<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre',
                'required' => 'false',
                'attr' => [
                'placeholder' => 'saisir le titre de l\'article'
                ]
            ])
            ->add('content', null, [
                'label' => 'contenu',
                'required' => 'false',
                'attr' => [
                    'placeholder' => 'saisir le contenu de l\'article',
                    'rows' => 8
                ]
            ])
            ->add('lien', UrlType::class, [
             'label' => 'Titre',
             'required' => 'false',
             'attr' => [
             'placeholder' => 'Veuillez saisir le lien de l\'article'
             ]

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
