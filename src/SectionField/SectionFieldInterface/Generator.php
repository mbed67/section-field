<?php
declare (strict_types=1);

namespace Tardigrades\SectionField\SectionFieldInterface;

use Tardigrades\Entity\EntityInterface\Section;
use Tardigrades\SectionField\Generator\Writer\Writable;

interface Generator
{
    public function generateBySection(Section $section): Writable;
    public function getBuildMessages(): array;
}
