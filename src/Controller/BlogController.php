<?php

namespace App\Controller;

use App\Entity\Dish;
use App\Repository\DishRepository;
use App\Form\DishType;
use App\Entity\Comment;
use App\Form\CommentType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController {
    /**
     * @Route("/blog", name="blog")
     */
    public function index(DishRepository $repo)
    {
        $dishes = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'dishes' => $dishes,
        ]);
    }

    /**
     * @Route("/", name="main")
     */
    public function main() {
        return $this->render('blog/main.html.twig');
    }

    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit")
     */
    public function form(Dish $dish = null, Request $request, EntityManagerInterface $manager) {

        if(!$dish) {
            $dish = new Dish();
        }

        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if(!$dish->getId()) {
                $dish->setCreatedAt(new \DateTime());
            }

            $manager->persist($dish);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $dish->getId()]);
        }

        return $this->render('blog/create.html.twig', [
            'formDish' => $form->createView(),
            'editMode' => $dish->getId() !== null
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Dish $dish, Request $request, EntityManagerInterface $manager) {

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \DateTime())
                    ->setDish($dish);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $dish->getId()]);
        }

        return $this->render('blog/show.html.twig', [
            'dish' => $dish,
            'commentForm' => $form->createView()
        ]);
    }


}
