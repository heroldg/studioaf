<?php

namespace App\Form;

use App\Entity\Calendar;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use Symfony\Component\Console\Color;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('start', DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('end', DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('descrition')
            ->add('all_day')
            ->add('backgroundcolor', ColorType::class, [])
            ->add('border_color', ColorType::class, [])
            ->add('text_color', ColorType::class, []);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
