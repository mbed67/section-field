<?php
declare (strict_types=1);

namespace Tardigrades\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tardigrades\SectionField\SectionFieldInterface\SectionManager;

class ListSectionCommand extends SectionCommand
{
    public function __construct(
        SectionManager $sectionManager
    ) {
        parent::__construct($sectionManager, 'sf:list-section');
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Show installed sections.')
            ->setHelp('This command lists all installed sections.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $sections = $this->sectionManager->readAll();

        $this->renderTable($output, $sections, 'All installed Sections');
    }
}

