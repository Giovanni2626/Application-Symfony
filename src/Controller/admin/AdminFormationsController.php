<?php
namespace App\Controller\admin;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminFormationsController extends AbstractController {

    private $repository;

    public function __construct(FormationRepository $repository) {
        $this->repository = $repository;
    }

    #[Route('/admin/formations', name: 'admin.formations')]
    public function index(): Response {
        $formations = $this->repository->findAll();
        return $this->render("admin/admin.formations.html.twig", [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formation/edit/{id}', name: 'admin.formation.edit')]
    public function edit(Formation $formation, Request $request): Response {
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->repository->add($formation, true);
            return $this->redirectToRoute('admin.formations');
        }

        return $this->render("admin/admin.formation.edit.html.twig", [
            'formation' => $formation,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/formation/ajout', name: 'admin.formation.ajout')]
    public function ajout(Request $request): Response {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->repository->add($formation, true);
            return $this->redirectToRoute('admin.formations');
        }

        return $this->render("admin/admin.formation.edit.html.twig", [
            'form' => $form->createView(),
            'formation' => $formation
        ]);
    }

    #[Route('/admin/formation/suppr/{id}', name: 'admin.formation.suppr', methods: ['POST'])]
    public function suppr(Formation $formation, Request $request): Response {
        if ($this->isCsrfTokenValid('delete'.$formation->getId(), $request->get('_token'))) {
            $this->repository->remove($formation, true);
        }
        return $this->redirectToRoute('admin.formations');
    }
}