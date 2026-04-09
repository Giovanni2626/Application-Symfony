<?php
namespace App\Controller\admin;

use App\Entity\Playlist;
use App\Form\PlaylistType;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPlaylistsController extends AbstractController {

    private $repository;

    public function __construct(PlaylistRepository $repository) {
        $this->repository = $repository;
    }

    #[Route('/admin/playlist/ajout', name: 'admin.playlist.ajout')]
    public function ajout(Request $request): Response {
        $playlist = new Playlist();
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->repository->add($playlist, true);
        
            $this->addFlash('success', 'Playlist ajoutée avec succès.');
            return $this->redirectToRoute('playlists');
        }

        return $this->render("admin/admin.playlist.edit.html.twig", [
            'playlist' => $playlist,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/playlist/edit/{id}', name: 'admin.playlist.edit')]
    public function edit(Playlist $playlist, Request $request): Response {
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->repository->add($playlist, true);
            
            $this->addFlash('success', 'Playlist modifiée avec succès.');
            return $this->redirectToRoute('playlists');
        }

        return $this->render("admin/admin.playlist.edit.html.twig", [
            'playlist' => $playlist,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/playlist/suppr/{id}', name: 'admin.playlist.suppr')]
    public function suppr(Playlist $playlist): Response {
        if ($playlist->getFormations()->count() > 0) {
            $this->addFlash('error', 'Impossible de supprimer une playlist contenant des formations.');
        } else {
            $this->repository->remove($playlist, true);
            
            $this->addFlash('success', 'Playlist supprimée.');
        }
      
        return $this->redirectToRoute('playlists');
    }
}