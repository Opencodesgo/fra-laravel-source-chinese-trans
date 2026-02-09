<?php
/**
 * Illuminate，Http，文件，从Symfony文件继承
 */

namespace Illuminate\Http;

use Symfony\Component\HttpFoundation\File\File as SymfonyFile;

class File extends SymfonyFile
{
    use FileHelpers;
}
