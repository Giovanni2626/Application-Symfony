<?php
namespace App\Controller\admin;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategoriesController extends AbstractController
{
    private $repository;

    public function __construct(CategorieRepository $repository) {
        $this->repository = $repository;
    }

    #[Route('/admin/categories', name: 'admin.categories')]
    public function index(Request $request): Response
    {
        $nomCategorie = $request->get('nom');
        if ($nomCategorie) {
            $existante = $this->repository->findOneBy(['name' => $nomCategorie]);
            if ($existante) {
                $this->addFlash('error', 'Cette catégorie existe déjà.');
            } else {
                $categorie = new Categorie();
                $categorie->setName($nomCategorie);
                $this->repository->add($categorie, true);
                $this->addFlash('success', 'Catégorie ajoutée avec succès.');
            }
            return $this->redirectToRoute('admin.categories');
        }

        $categories = $this->repository->findBy([], ['name' => 'ASC']);
        return $this->render("admin/admin.categories.html.twig", [
            'categories' => $categories
        ]);
    }

    #[Route('/admin/categorie/suppr/{id}', name: 'admin.categorie.suppr')]
    public function suppr(Categorie $categorie): Response
    {
        if ($categorie->getFormations()->count() > 0) {
            $this->addFlash('error', 'Impossible de supprimer : cette catégorie est utilisée par des formations.');
        } else {
            $this->repository->remove($categorie, true);
            $this->addFlash('success', 'Catégorie supprimée.');
        }
        return $this->redirectToRoute('admin.categories');
    }
}