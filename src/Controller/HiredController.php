<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Candidate;
use App\Repository\CandidateRepository;
use App\Service\SendMail;

class HiredController extends AbstractController
{
    /**
     * @Route("/candidate/list", name="candidate_list")
     */
    public function list(Request $request, CandidateRepository $candidateRepository){
        $candidates = $candidateRepository->findAll();
        $candidatesArr = [];
        foreach ($candidates as $value) {
            $candidatesArr[] = [
                'id' => $value->getId(),
                'firstName' => $value->getFirstName(),
                'lastName' => $value->getLastName(),
                'email' => $value->getEmail(),
            ];
        }
        $response = new JsonResponse();

        $response->setData([
            'success' => true,
            'data' => $candidatesArr,
    ]);
        return $response;
    }


    /**
     * @Route("/candidate/create", name="candidate_create")
     */
    public function createCandidate(Request $request, EntityManagerInterface $em){
        $candidate = new Candidate();
        $firstName = $request->get('firstname',null);
        $lastName = $request->get('lastname',null);
        $email = $request->get('email',null);
        $response = new JsonResponse();
        if (empty($firstName)) {
            $response->setData([
                'success' => false,
                'data' => [
                    [
                        'error' => 'First Name cannot be empty',
                        'data' => null,
                    ],
                ]
            ]);
            return $response;
        }
        if (empty($lastName)) {
            $response->setData([
                'success' => false,
                'data' => [
                    [
                        'error' => 'Last Name cannot be empty',
                        'data' => null,
                    ],
                ]
            ]);
            return $response;
        }
        if (empty($email)) {
            $response->setData([
                'success' => false,
                'data' => [
                    [
                        'error' => 'Email cannot be empty',
                        'data' => null,
                    ],
                ]
            ]);
            return $response;
        }
        $candidate->setFirstName($firstName);
        $candidate->setLastName($lastName);
        $candidate->setEmail($email);
        $candidate->setStatus('Apto');
        $em->persist($candidate);
        $em->flush();
        
        $response->setData([
            'success' => true,
            'data' => [
                [
                    'id' => $candidate->getId(),
                    'name' => $candidate->getFirstName(),
                ],
            ]
        ]);
        return $response;
    }

    /**
     * @Route("/candidate/contratar", name="candidate_contratar")
     */
    public function contratar ( Request $request, 
                                EntityManagerInterface $em, 
                                CandidateRepository $candidateRepository,
                                SendMail $sendMail){
        $candidateId = $request->get('id',null);
        $response = new JsonResponse();
        if (empty($candidateId)) {
            $response->setData([
                'success' => false,
                'data' => [
                    [
                        'error' => 'Id cannot be empty',
                        'data' => null,
                    ],
                ]
            ]);
            return $response;
        }
        $candidateObj = $candidateRepository->findOneBy(array('id' => $candidateId));
        $candidateObj->setStatus('Contratado');
        $em->persist($candidateObj);
        $em->flush();
        $mailSended = $sendMail->sendMAilWithAlgunProvider();
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [
                [
                    'id' => $candidateObj->getId(),
                    'firstName' => $candidateObj->getFirstName(),
                    'lastName' => $candidateObj->getLastName(),
                    'email' => $candidateObj->getEmail(),
                    'status' => $candidateObj->getStatus(),
                    'Notification' => $mailSended
                ],
            ]
        ]);
        return $response;

    }
}