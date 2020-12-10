<?php
namespace App\Controller;


use App\Entity\Admin;
use App\Entity\Lieu;
use App\Entity\Ville;
use App\Form\CreateAdminType;
use App\Form\LieuType;
use App\Form\VilleType;
use App\Repository\AdminRepository;
use App\Repository\LieuRepository;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/dashboard")
     */
    public function admin(
    ): Response

    {
        return $this->render('admin/profil.html.twig');
    }


    /**
     * @Route("/admin/su/liste-adminitrateurs")
     *
     * @return Response
     */
    public function ladmin(AdminRepository $admins
    ): Response

    {
        $listeadmins = $admins->findBy(
            ['suadmin' => 0]
        );
        return $this->render('admin/administrateur/liste-administrateur.html.twig',
            ['listeadmins' => $listeadmins]
        );
    }


    /**
     * @Route("/admin/delete-adminitrateurs-{id}", requirements={"id": "\d+"})
     */
    public function dadmin( int $id, AdminRepository $admins
    ): Response
    {
        $deleteadmin = $admins->findOneBy(
            ['id' => $id]);
        $em = $this->getDoctrine()->getManager();
        $em->remove($deleteadmin);
        $em->flush();

        $listeadmins = $admins->findBy(
            ['suadmin' => 0]
        );
         $this->addFlash('warning','L\'administrateur a bien été supprimé');
        return $this->render('admin/administrateur/liste-administrateur.html.twig',
            ['listeadmins' => $listeadmins]
        );
    }


    /**
     * @Route("/admin/su/modifier-administrateur-{id}", requirements={"id": "\d+"})
     */
    public function madmin(int $id, AdminRepository $admins,Request $request,EntityManagerInterface $manager
    ): Response

    {
        $options = [
            'salt' => "AjfgYRZYFnfne522efauegY",
        ];
        $modifadmin = $admins->findOneBy(
            ['id' => $id]);


        $adminadd = New Admin();
        $form = $this->createForm(CreateAdminType::class, $adminadd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository(Admin::class)->find($id);


            $plainPassword = $adminadd->getMdp();
            $identifiant = $adminadd->getIdentifiant();
            $nom = $adminadd->getNom();
            $prenom = $adminadd->getPrenom();
            $email = $adminadd->getEmail();
            $adduser = $adminadd->getAddadmin();

            $encoded = password_hash($plainPassword, PASSWORD_BCRYPT, $options);

            $product->setNom($nom)
                ->setMdp($encoded)
                ->setIdentifiant($identifiant)
                ->setPrenom($prenom)
                ->setEmail($email)
                ->setAddadmin($adduser);

            $em->flush();
            $listeadmins = $admins->findBy(
                ['suadmin' => 0]
            );
            $this->addFlash('success','L\'administrateur a bien été modifié');
            return $this->render('admin/administrateur/liste-administrateur.html.twig',
                ['listeadmins' => $listeadmins]

            );
        }
            return $this->render('admin/administrateur/modifier-administrateur.html.twig',[
                'form' => $form->createView(),
                'admin' => $modifadmin
            ]);
        }



    /**
     * @Route("/admin/su/ajouter-administrateur")
     */
    public function aadmin(Request $request,EntityManagerInterface $manager, AdminRepository $admins): Response
    {
        $options = [
            'salt' => "AjfgYRZYFnfne522efauegY",
        ];

        $adminadd = New Admin();
        $form = $this->createForm(CreateAdminType::class, $adminadd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $plainPassword = $adminadd->getMdp();
            $encoded = password_hash($plainPassword, PASSWORD_BCRYPT,$options);
            $adminadd->setMdp($encoded);
            $manager->persist($adminadd);
            $manager->flush();
            $listeadmins = $admins->findBy(
                ['suadmin' => 0]
            );
            $this->addFlash('success','L\'administrateur a bien été ajouté.');
            return $this->render('admin/administrateur/liste-administrateur.html.twig',
                ['listeadmins' => $listeadmins]);
        }

        return $this->render('admin/administrateur/ajouter-administrateur.html.twig',[
            'form' => $form->createView()
        ]);
    }











    /**
     * @Route("/admin/liste-lieux")
     */
    public function llieu(LieuRepository $repository_lieu
    ): Response

    {
        $lieux = $repository_lieu->findAll();

        return $this->render('admin/lieu/liste-lieu.html.twig',[
            'lieux' => $lieux,
        ]);
    }


    /**
     * @Route("/admin/modifier-lieu-{id}", requirements={"id": "\d+"})
     */
    public function mlieu(int $id,Request $request,EntityManagerInterface $manager, LieuRepository $repository_lieu
    ): Response

    {
        $lieu = $repository_lieu->findOneBy(
            ['id' => $id]);
        $lieuadd = New Lieu();
        $form = $this->createForm(LieuType::class, $lieuadd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository(Lieu::class)->find($id);



            $nom = $lieuadd->getnom();
            $codepostal = $lieuadd->getCodePostal();
            $desc = $lieuadd->getDescription();
            $vref = $lieuadd->getVilleReferente();
            $type = $lieuadd->getType();
            $selec = $lieuadd->getNotreSelection();
            $tarif = $lieuadd->getPrix();
            $plusv = $lieuadd->getPlusVisite();
            $hor = $lieuadd->getHoraires();
            $photo = $lieuadd->getPhoto();
            $addr = $lieuadd->getAdresse();
            $site = $lieuadd->getSiteInternet();
            $transport = $lieuadd->getTransport();
            $maps = $lieuadd->getLienMaps();
            $even = $lieuadd->getEvenement();


            $product->setNom($nom)
                ->setCodePostal($codepostal)
                ->setDescription($desc)
                ->setVilleReferente($vref)
                ->setType($type)
                ->setNotreSelection($selec)
                ->setPrix($tarif)
                ->setPlusVisite($plusv)
                ->setHoraires($hor)
                ->setPhoto($photo)
                ->setAdresse($addr)
                ->setSiteInternet($site)
                ->setTransport($transport)
                ->setLienMaps($maps)
                ->setEvenement($even);

            $em->flush();
            $this->addFlash('success','Le lieu a bien été modifié');
            $lieux = $repository_lieu->findAll();
            return $this->render('admin/lieu/liste-lieu.html.twig',
                ['lieux' => $lieux]

            );
        }
        return $this->render('admin/lieu/modifier-lieu.html.twig',[
            'form' => $form->createView(),
            'lieu' => $lieu
        ]);
    }

    /**
     * @Route("/admin/ajouter-lieu")
     */
    public function alieu(Request $request,EntityManagerInterface $manager, LieuRepository $repository_lieu
    ): Response

    {
        $lieu = New Lieu();
        $form = $this->createForm(LieuType::class, $lieu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($lieu);
            $manager->flush();
            $this->addFlash('success','Le lieu a bien été ajouté.');
            $lieux = $repository_lieu->findAll();
            return $this->render('admin/lieu/liste-lieu.html.twig',
                ['lieux' => $lieux]
            );
        }

        return $this->render('admin/lieu/ajouter-lieu.html.twig',[
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/delete-lieu-{id}", requirements={"id": "\d+"})
     */
    public function dlieu( int $id, LieuRepository $lieu_Repository
    ): Response
    {
        $deletelieu = $lieu_Repository->findOneBy(
            ['id' => $id]);
        $em = $this->getDoctrine()->getManager();
        $em->remove($deletelieu);
        $em->flush();
        $this->addFlash('warning','Le lieu a bien été supprimé');
        $lieux = $lieu_Repository->findAll();
        return $this->render('admin/lieu/liste-lieu.html.twig',
            ['lieux' => $lieux]

        );
    }







    /**
     * @Route("/admin/liste-villes")
     */
    public function lvilles(VilleRepository $repository_ville
    ): Response

    {
        $villes = $repository_ville->findAll();
        return $this->render('admin/ville/liste-ville.html.twig',[
            'villes' => $villes,
        ]);
    }


    /**
     * @Route("/admin/modifier-ville-{id}", requirements={"id": "\d+"})
     */
    public function mville(int $id,Request $request,EntityManagerInterface $manager, VilleRepository $repository_ville
    ): Response

    {
        $ville = $repository_ville->findOneBy(
            ['id' => $id]);
        $villeadd = New Ville();
        $form = $this->createForm(VilleType::class, $villeadd);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository(Ville::class)->find($id);



            $nom = $villeadd->getnom();
            $codepostal = $villeadd->getCodePostal();
            $desc = $villeadd->getDescription();
            $photo = $villeadd->getImg();
            $maps = $villeadd->getLienMaps();


            $product->setNom($nom)
                ->setCodePostal($codepostal)
                ->setDescription($desc)
                ->setImg($photo)
                ->setLienMaps($maps);

            $em->flush();
            $this->addFlash('success','La ville a bien été modifié');
            $villes = $repository_ville->findAll();
            return $this->render('admin/ville/liste-ville.html.twig',
                ['villes' => $villes]

            );
        }
        return $this->render('admin/ville/modifier-ville.html.twig',[
            'form' => $form->createView(),
            'ville' => $ville
        ]);

    }



    /**
     * @Route("/admin/ajouter-ville")
     */
    public function aville(Request $request,EntityManagerInterface $manager, VilleRepository $repository_ville
    ): Response

    {
        $ville = New Ville();
        $form = $this->createForm(VilleType::class, $ville);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($ville);
            $manager->flush();
            $this->addFlash('success','La ville a bien été ajouté.');
            $villes = $repository_ville->findAll();
            return $this->render('admin/ville/liste-ville.html.twig',
                ['villes' => $villes]
            );
        }

        return $this->render('admin/ville/ajouter-ville.html.twig',[
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/delete-ville-{id}", requirements={"id": "\d+"})
     */
    public function dville( int $id, VilleRepository $ville_Repository
    ): Response
    {
        $deleteville = $ville_Repository->findOneBy(
            ['id' => $id]);
        $em = $this->getDoctrine()->getManager();
        $em->remove($deleteville);
        $em->flush();
        $this->addFlash('warning','La ville a bien été supprimé');
        $villes = $ville_Repository->findAll();
        return $this->render('admin/ville/liste-ville.html.twig',
            ['villes' => $villes]

        );
    }

}

