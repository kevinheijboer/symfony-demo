<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use App\Entity\Recipe;
use App\Form\RecipeType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class RecipeController extends AbstractController
{
    public function __construct(private RecipeRepository $recipeRepository, private EntityManagerInterface $entityManager)
    {
        $this->recipeRepository = $recipeRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/recipe', name: 'app_recipe')]
    public function index(): Response
    {
        $recipes = $this->recipeRepository->findAll();

        return $this->render('recipe/index.html.twig', [
            'recipes' => $recipes,
        ]);
    }

    #[Route('/recipe/create', name: 'app_recipe_create')]
    public function create(Request $request): Response
    {
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($recipe);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_recipe');
        }

        return $this->render('recipe/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
