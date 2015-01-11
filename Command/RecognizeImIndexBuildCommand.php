<?php

namespace Kwn\RecognizeImBundle\Command;

use RecognizeIm\Exception\SoapApiException;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Search Sphinx Rotate Command
 */
class RecognizeImIndexBuildCommand extends ContainerAwareCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this
            ->setName('recognizeim:build-index')
            ->setDescription('Build RecognizeIm index')
        ;
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $recognizeIm = $this->getContainer()->get('recognizeim.client.soap');

        $output->writeln('Start building RecognizeIm index...');
        $recognizeIm->indexBuild();
        $output->writeln('<info>Building complete</info>');
    }
}
