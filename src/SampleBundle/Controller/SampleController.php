<?php

namespace SampleBundle\Controller;

use SampleBundle\Entity\Sample;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sample controller.
 *
 * @Route("sample")
 */
class SampleController extends Controller
{
    /**
     * Lists all sample entities.
     *
     * @Route("/", name="sample_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $samples = $em->getRepository('SampleBundle:Sample')->findAll();

        return $this->render('sample/index.html.twig', array(
            'samples' => $samples,
        ));
    }

    /**
     * Creates a new sample entity.
     *
     * @Route("/new", name="sample_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sample = new Sample();
        $form = $this->createForm('SampleBundle\Form\SampleType', $sample);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sample);
            $em->flush();

            return $this->redirectToRoute('sample_show', array('id' => $sample->getId()));
        }

        return $this->render('sample/new.html.twig', array(
            'sample' => $sample,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sample entity.
     *
     * @Route("/{id}", name="sample_show")
     * @Method("GET")
     */
    public function showAction(Sample $sample)
    {
        $deleteForm = $this->createDeleteForm($sample);

        return $this->render('sample/show.html.twig', array(
            'sample' => $sample,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sample entity.
     *
     * @Route("/{id}/edit", name="sample_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sample $sample)
    {
        $deleteForm = $this->createDeleteForm($sample);
        $editForm = $this->createForm('SampleBundle\Form\SampleType', $sample);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sample_edit', array('id' => $sample->getId()));
        }

        return $this->render('sample/edit.html.twig', array(
            'sample' => $sample,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sample entity.
     *
     * @Route("/{id}", name="sample_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sample $sample)
    {
        $form = $this->createDeleteForm($sample);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sample);
            $em->flush();
        }

        return $this->redirectToRoute('sample_index');
    }

    /**
     * Creates a form to delete a sample entity.
     *
     * @param Sample $sample The sample entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sample $sample)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sample_delete', array('id' => $sample->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
